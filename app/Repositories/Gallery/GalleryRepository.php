<?php 

namespace App\Repositories\Gallery;
use App\Repositories\Gallery\GalleryInterface;
use App\Http\Traits\ApiContentsTrait;

Class GalleryRepository implements GalleryInterface{
    use ApiContentsTrait;

    public function getGalleryVideos(){
        $galleryVideos = $this->getApiContents("1523.json?offset=1&limit=5");
        if($galleryVideos != null){
            $galleryVideos = $galleryVideos['data']['galeri_video'];
        }
        return $galleryVideos;
    }

    public function getGalleryPhotos(){
        $galleryPhotos = $this->getApiContents("1533.json?offset=1&limit=5");
        if($galleryPhotos != null){
            $galleryPhotos = $galleryPhotos['data']['galeri_gambar'];
        }
        return $galleryPhotos;
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
        $detailGalleryPhoto = $this->getApiContents("1534.json?galeri_id=".$id);
        if($detailGalleryPhoto != null){
            if(count($detailGalleryPhoto['data']['galeri_detail']) < 1){
                $detailGalleryPhoto = null;
            }else{
                $detailGalleryPhoto = $detailGalleryPhoto['data']['galeri_detail'][0];
            }  
        }
        return $detailGalleryPhoto;
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