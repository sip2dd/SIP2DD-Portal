<?php 

namespace App\Repositories\Gallery;
use App\Repositories\Gallery\GalleryInterface;
use App\Http\Traits\ApiContentsTrait;

Class GalleryRepository implements GalleryInterface{
    use ApiContentsTrait;

    public function getGalleryVideos($offset){
        
        if($offset != null){
            $galleryVideos = $this->getApiContents("1523.json?offset=".$offset."&limit=3");
        }else{
            $galleryVideos = $this->getApiContents("1523.json?offset=null&limit=3");
        }
        if($galleryVideos != null){
            $galleryVideos = $galleryVideos['data']['galeri_video'];
        }
        return $galleryVideos;
    }

    public function getGalleryPhotos($offset=null, $limit=3){
        if($offset != null){
            $galleryPhotos = $this->getApiContents("1533.json?offset=".$offset."&limit=".$limit);
        }else{
            $galleryPhotos = $this->getApiContents("1533.json?offset=null&limit=".$limit);
        }

        if($galleryPhotos != null){
            $galleryPhotos = $galleryPhotos['data']['galeri_gambar'];
        }
        return $galleryPhotos;
    }

    public function getCountGalleryPhotos(){
        $photoItems = $this->getApiContents("1570.json");
        if($photoItems != null){
            $photoItems = $photoItems['data']['cnt_photo'][0]['cnt'];
        }
        return $photoItems;
    }

    public function getGalleryPhotosAtt($id){
        $photoItems = $this->getApiContents("1565.json?galeri_id=".$id);
        if($photoItems != null){
            $photoItems = $photoItems['data']['lampiran_galeri'];
        }
        return $photoItems;
    }

    public function getCountGalleryVideos(){
        $videoItems = $this->getApiContents("1571.json");
        if($videoItems != null){
            $videoItems = $videoItems['data']['cnt_video'][0]['cnt'];
        }
        return $videoItems;
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