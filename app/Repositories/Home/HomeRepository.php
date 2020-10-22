<?php

namespace App\Repositories\Home;
use App\Repositories\Home\HomeInterface;
use App\Http\Traits\ApiContentsTrait;

Class HomeRepository implements HomeInterface{

    use ApiContentsTrait;
    
    public function getGovServices(){
        $govServices = $this->getApiContents("1535.json");
        return $govServices;
    }

    public function getNewsItems(){
        $newsItems = $this->getApiContents("1527.json");
        return $newsItems;
    }

    public function getEducationNewsItems(){
        $eduNewsItems = $this->getApiContents("1527.json");
        return $eduNewsItems;
    }

    public function getGalleryNewsItems(){
        $galleryNewsItems = $this->getApiContents("1523.json");
        return $galleryNewsItems;
    }
}