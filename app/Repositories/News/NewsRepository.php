<?php

namespace App\Repositories\News;
use App\Repositories\News\NewsInterface;
use App\Http\Traits\ApiContentsTrait;

Class NewsRepository implements NewsInterface{
    use ApiContentsTrait;

    public function getHighlight(){
        $highlightItems = $this->getApiContents("1527.json");
        if($highlightItems != null){
            $highlightItems = $highlightItems['data']['highlight'];
        }
        return $highlightItems;
    }

    //duplicate
    public function getAllHighlight(){
        $highlightItems = $this->getApiContents("1527.json");
        if($highlightItems != null){
            $highlightItems = $highlightItems['data']['highlight'];
        }
        return $highlightItems;
    }

    public function getNationalGovNews(){
        $nationalGovNews = $this->getApiContents("1529.json");
        if($nationalGovNews != null){
            $nationalGovNews = $nationalGovNews['data']['berita_satgas'];
        }
        return $nationalGovNews;
    }

    // duplicate
    public function getAllNationalGovNews(){
        $nationalGovNews = $this->getApiContents("1529.json");
        if($nationalGovNews != null){
            $nationalGovNews = $nationalGovNews['data']['berita_satgas'];
        }
        return $nationalGovNews;
    }

    public function getLocalGovNews(){
        $localGovNews = $this->getApiContents("1530.json");
        if($localGovNews != null){
            $localGovNews = $localGovNews['data']['berita_pemda'];
        }
        return $localGovNews;
    }

    public function getAllLocalGovNews(){
        $localGovNews = $this->getApiContents("1530.json");
        if($localGovNews != null){
            $localGovNews = $localGovNews['data']['berita_pemda'];
        }
        return $localGovNews;
    }

    public function getGalleryVideos(){
        $galleryVideos = $this->getApiContents("1523.json");
        if($galleryVideos != null){
            $galleryVideos = $galleryVideos['data']['galeri_video'];
        }
        return $galleryVideos;
    }

    public function getDetailNews($id = "0"){
        $detailNews = $this->getApiContents("1528.json?berita_id=".$id);
        if($detailNews != null){
            $detailNews = $detailNews['data']['berita_detail'];
        }
        return $detailNews;
    }

    public function searchNews($keyword){
        $newsItems = $this->getApiContents("1532.json?judul=".$keyword."&kata_kunci=".$keyword);
        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
        }
        return $newsItems;
    }

}
