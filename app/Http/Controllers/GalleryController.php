<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Gallery\GalleryInterface;
use Share;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ApiContentsTrait;

class GalleryController extends Controller
{
    use ApiContentsTrait;

    public function __construct(GalleryInterface $galleryRepo){
        $this->galleryRepo = $galleryRepo;
    }

    public function galleryPhoto(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $galleryPhotos = $this->galleryRepo->getGalleryPhotos($offset, $limit);
        $count = $this->galleryRepo->getCountGalleryPhotos();
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();
                
        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('gallery.galleryPhotoPage', [
            'galleryPhotos' => $galleryPhotos,
            'p2dd_info' => $p2dd_info,
            'menus' => $menus,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function searchGalleryPhoto(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $judul = "";
        $count = 0;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;
        $galleryPhotos = null;
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($request->has('keyword')) {
            if($request->keyword != ''){
                $judul = $request->keyword;
                if (!$validator->fails()) {
                    $pages = $request->page;
                    if($pages > 1){
                        $offset = ($pages - 1) * $limit; 
                    } 
                }else{
                    $pages = 1;
                }
                $galleryPhotos = $this->galleryRepo->searchGalleryPhoto($judul, $offset, $limit);
                
                $count = $this->galleryRepo->getCountGalleryPhoto($judul);
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }

        return view('gallery.searchGalleryPhotoPage', [
            'count' => $count,
            'p2dd_info' => $p2dd_info,
            'keyword' => $judul,
            'galleryPhotos' => $galleryPhotos,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'menus' => $menus,
            'title' => $judul
        ]);
    }

    public function detailGalleryPhoto(Request $request)
    {
        $offset =null;
        $limit = 5;
        $detailGalleryPhoto = null;
        $attachments = null;
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailGalleryPhoto = $this->galleryRepo->getDetailGalleryPhoto($id); 
                $attachments = $this->galleryRepo->getGalleryPhotosAtt($id);
                if($detailGalleryPhoto != null){
                    $getSocmed = $this->getSocmed($detailGalleryPhoto['judul']);
                }else{
                    $getSocmed = $this->getSocmed();
                }               
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        $galleryPhotos = $this->galleryRepo->getGalleryPhotos($offset, $limit);

        return view('gallery.detailGalleryPhotoPage', [
            'detailGalleryPhoto' => $detailGalleryPhoto,
            'attachments' => $attachments,
            'galleryPhotos' => $galleryPhotos,
            'p2dd_info' => $p2dd_info,
            'menus' => $menus,
            'socmed' => $getSocmed 
        ],);

    }

    public function galleryVideo(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $galleryVideos = $this->galleryRepo->getGalleryVideos($offset, $limit);
        $count = $this->galleryRepo->getCountGalleryVideos();
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();
        
                
        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('gallery.galleryVideoPage', [
            'galleryVideos' => $galleryVideos,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'p2dd_info' => $p2dd_info,
            'menus' => $menus,
        ]);
    }

    public function searchGalleryVideo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $judul = "";
        $count = 0;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;
        $galleryVideos = null;
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($request->has('keyword')) {
            if($request->keyword != ''){
                $judul = $request->keyword;
                if (!$validator->fails()) {
                    $pages = $request->page;
                    if($pages > 1){
                        $offset = ($pages - 1) * $limit; 
                    } 
                }else{
                    $pages = 1;
                }
                $galleryVideos = $this->galleryRepo->searchGalleryVideo($judul, $offset, $limit);
                $count = $this->galleryRepo->getCountGalleryVideo($judul);
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }
        
        return view('gallery.searchGalleryVideoPage', [
            'count' => $count,
            'keyword' => $judul,
            'galleryVideos' => $galleryVideos,
            'page' => $pages ?? 1,
            'p2dd_info' => $p2dd_info,
            'menus' => $menus,
            'pagination' => $pagination
        ]);
    }

    public function detailGalleryVideo(Request $request)
    {
        $galleryVideo = null;
        $getSocmed = null;
        $offset = null;
        $attachments = null;
        $limit = 3;

        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailGalleryVideo = $this->galleryRepo->getDetailGalleryVideo($id); 
                $attachments = $this->galleryRepo->getGalleryPhotosAtt($id);
                if($detailGalleryVideo != null){
                    $getSocmed = $this->getSocmed($detailGalleryVideo['judul']);
                }else{
                    $getSocmed = $this->getSocmed();
                }               
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        $galleryVideos = $this->galleryRepo->getGalleryVideos($offset, $limit);
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        // dd($attachments);

        return view('gallery.detailGalleryVideoPage', [
            'detailGalleryVideo' => $detailGalleryVideo, 
            'galleryVideos' => $galleryVideos,
            'attachments' => $attachments,
            'socmed' => $getSocmed,
            'p2dd_info' => $p2dd_info,
            'menus' => $menus, 
        ],);
    }

    public function getSocmed($title = ""){
        $socmed = Share::currentPage($title)
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->getRawLinks();
        return $socmed;
    }
}
