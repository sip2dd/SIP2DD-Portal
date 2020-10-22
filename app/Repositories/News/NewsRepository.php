<?php

namespace App\Repositories\News;
use App\Repositories\News\NewsInterface;
use App\Http\Traits\ApiContentsTrait;

Class NewsRepository implements NewsInterface{
    use ApiContentsTrait;

    public function getHighlight(){
        $data = $this->getApiContents("1527.json");
        return $data;
    }

    public function getAllHighlight(){
        $data = $this->getApiContents("1527.json");
        return $data;
    }

    public function getNationalGovNews(){
        $data = $this->getApiContents("1529.json");
        return $data;
    }

    public function getAllNationalGovNews(){
        $data = $this->getApiContents("1529.json");
        return $data;
    }

    public function getLocalGovNews(){
        $data = $this->getApiContents("1530.json");
        return $data;
    }

    public function getAllLocalGovNews(){
        $data = $this->getApiContents("1530.json");
        return $data;
    }

    public function getGalleryVideos(){
        $data = $this->getApiContents("1523.json");
        return $data;
    }

    public function getDetailNews($id = "0"){
        $data = $this->getApiContents("1528.json?berita_id=".$id);
        return $data;
    }

    public function searchNews($keyword){
        $data = $this->getApiContents("1532.json?judul=".$keyword."&keyword=".$keyword);
        return $data;
    }

}
