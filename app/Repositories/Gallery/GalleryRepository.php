<?php 

namespace App\Repositories\Gallery;
use App\Repositories\Gallery\GalleryInterface;
use App\Http\Traits\ApiContentsTrait;

Class GalleryRepository implements GalleryInterface{
    use ApiContentsTrait;

    public function getGalleryVideos(){
        $govServices = $this->getApiContents("1523.json");
        return $govServices;
    }

    public function getGalleryPhotos(){
        $govServices = $this->getApiContents("1533.json");
        return $govServices;
    }

    public function getDetailGalleryVideo($id){
        $govServices = $this->getApiContents("1534.json?galeri_id=".$id);
        return $govServices;
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