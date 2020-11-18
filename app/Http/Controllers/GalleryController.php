<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Gallery\GalleryInterface;
use Share;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function __construct(GalleryInterface $galleryRepo){
        $this->galleryRepo = $galleryRepo;
    }

    public function galleryPhoto(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * 3; 
            } 
        }else{
            $pages = 1;
        }

        $galleryPhotos = $this->galleryRepo->getGalleryPhotos($offset);
        $count = $this->galleryRepo->getCountGalleryPhotos();
                
        if($count > 3){
            $pagination = ceil($count / 3);
        } 
        
        return view('gallery.galleryPhotoPage', [
            'galleryPhotos' => $galleryPhotos,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function detailGalleryPhoto(Request $request)
    {
        $offset =null;
        $detailGalleryPhoto = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailGalleryPhoto = $this->galleryRepo->getDetailGalleryPhoto($id); 
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

        $galleryPhotos = $this->galleryRepo->getGalleryPhotos($offset);

        return view('gallery.detailGalleryPhotoPage', [
            'detailGalleryPhoto' => $detailGalleryPhoto, 
            'galleryPhotos' => $galleryPhotos,
            'socmed' => $getSocmed 
        ],);

    }

    public function galleryVideo(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * 3; 
            } 
        }else{
            $pages = 1;
        }

        $galleryVideos = $this->galleryRepo->getGalleryVideos($offset);
        $count = $this->galleryRepo->getCountGalleryVideos();
        
                
        if($count > 3){
            $pagination = ceil($count / 3);
        } 
        
        return view('gallery.galleryVideoPage', [
            'galleryVideos' => $galleryVideos,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function detailGalleryVideo(Request $request)
    {
        $galleryVideo = null;
        $getSocmed = null;
        $offset = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailGalleryVideo = $this->galleryRepo->getDetailGalleryVideo($id); 
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

        $galleryVideos = $this->galleryRepo->getGalleryVideos($offset);

        return view('gallery.detailGalleryVideoPage', [
            'detailGalleryVideo' => $detailGalleryVideo, 
            'galleryVideos' => $galleryVideos,
            'socmed' => $getSocmed 
        ],);
    }

    public function searchGallery(){}

    public function getSocmed($title = ""){
        $socmed = Share::currentPage($title)
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->getRawLinks();
        return $socmed;
    }
}
