<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Gallery\GalleryInterface;

class GalleryController extends Controller
{
    public function __construct(GalleryInterface $galleryRepo){
        $this->galleryRepo = $galleryRepo;
    }

    public function galeriFoto()
    {
        return view('news.galerifoto');
    }

    public function detailGaleriFoto(Request $request)
    {
        return view('news.detailgalerifoto');
    }

    public function galleryVideo()
    {
        return view('news.galerivideo');
    }

    public function detailGalleryVideo(Request $request)
    {
        $galleryVideo = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $galleryVideo = $this->galleryRepo->getDetailGalleryVideo($id);                
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        return view('news.detailGalleryVideo', ['galleryVideo' => $galleryVideo]);
    }
}
