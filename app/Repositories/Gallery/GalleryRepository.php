<?php 

namespace App\Repositories\Gallery;
use App\Repositories\Gallery\GalleryInterface;
use App\Http\Traits\ApiContentsTrait;

Class GalleryRepository implements GalleryInterface{
    use ApiContentsTrait;

    public function getGalleryVideos(){
        $galleryVideos = $this->getApiContents("1523.json");
        if($galleryVideos != null){
            $galleryVideos = $galleryVideos['data']['galeri_video'];
        }
        return $galleryVideos;
    }

    public function getGalleryPhotos(){
        $govServices = $this->getApiContents("1533.json");
        return $govServices;
    }

    public function getDetailGalleryVideo($id = "0"){
        $detailGalleryVideo = $this->getApiContents("1534.json?galeri_id=".$id);
        if($detailGalleryVideo != null){
            if(count($detailGalleryVideo['data']['galeri_detail']) < 1){
                $detailGalleryVideo = null;
            }else{
                $detailGalleryVideo = $detailGalleryVideo['data']['galeri_detail'][0];
            }  
        }
        return $detailGalleryVideo;
    }

    public function getDetailGalleryPhoto($id){
        $govServices = $this->getApiContents("1534.json?galeri_id=".$id);
        return $govServices;
    }

    public function getGalleryVideosbyLocalGov(){
        $govServices = $this->getApiContents("1535.json");
        return $govServices;
    }

    public function getGalleryPhotosbyLocalGov(){
        $govServices = $this->getApiContents("1535.json");
        return $govServices;
    }
}