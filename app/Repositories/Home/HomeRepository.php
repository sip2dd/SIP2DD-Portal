<?php

namespace App\Repositories\Home;
use App\Repositories\Home\HomeInterface;
use App\Http\Traits\ApiContentsTrait;

Class HomeRepository implements HomeInterface{

    use ApiContentsTrait;
    
    public function getGovServices(){
        $govServices = $this->getApiContents("1535.json");
        if($govServices != null){
            $govServices = $govServices['data']['layanan'];
        }
        return $govServices;
    }

    public function getNewsItems(){
        $newsItems = $this->getApiContents("1527.json");
        if($newsItems != null){
            $newsItems = $newsItems['data']['highlight'];
        }
        return $newsItems;
    }

    public function getEducationNewsItems(){
        $eduNewsItems = $this->getApiContents("1527.json");
        if($eduNewsItems != null){
            $eduNewsItems = $eduNewsItems['data']['highlight'];
        }
        return $eduNewsItems;
    }

    public function getGalleryNewsItems(){
        $galleryNewsItems = $this->getApiContents("1523.json");
        if($galleryNewsItems != null){
            $galleryNewsItems = $galleryNewsItems['data']['galeri_video'];
        }
        return $galleryNewsItems;
    }
}