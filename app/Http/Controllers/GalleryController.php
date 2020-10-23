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

    // public function galeriFoto()
    // {
    //     return view('news.galerifoto');
    // }

    // public function detailGaleriFoto(Request $request)
    // {
    //     return view('news.detailgalerifoto');
    // }

    // public function galleryVideo()
    // {
    //     return view('news.galerivideo');
    // }

    public function detailGalleryVideo(Request $request)
    {
        $galleryVideo = null;
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

        return view('gallery.detailGalleryVideo', [
            'detailGalleryVideo' => $detailGalleryVideo, 
            'galleryVideos' => $galleryVideos,
            'socmed' => $getSocmed 
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
