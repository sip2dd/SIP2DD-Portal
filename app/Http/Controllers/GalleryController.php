<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Gallery\GalleryInterface;
use Share;

class GalleryController extends Controller
{
    public function __construct(GalleryInterface $galleryRepo){
        $this->galleryRepo = $galleryRepo;
    }

    public function galleryPhoto()
    {
        $galleryPhotos = $this->galleryRepo->getGalleryPhotos();
        return view('gallery.galleryPhotoPage', ['galleryPhotos' => $galleryPhotos]);
    }

    public function detailGalleryPhoto(Request $request)
    {
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

        $galleryPhotos = $this->galleryRepo->getGalleryPhotos();

        return view('gallery.detailGalleryPhotoPage', [
            'detailGalleryPhoto' => $detailGalleryPhoto, 
            'galleryPhotos' => $galleryPhotos,
            'socmed' => $getSocmed 
        ],);

    }

    public function galleryVideo()
    {
        $galleryVideos = $this->galleryRepo->getGalleryVideos();
        return view('gallery.galleryVideoPage', ['galleryVideos' => $galleryVideos]);
    }

    public function detailGalleryVideo(Request $request)
    {
        $galleryVideo = null;
        $getSocmed = null;
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

        $galleryVideos = $this->galleryRepo->getGalleryVideos();

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
