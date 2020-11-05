<?php

namespace App\Repositories\News;
use App\Repositories\News\NewsInterface;
use App\Http\Traits\ApiContentsTrait;

Class NewsRepository implements NewsInterface{
    use ApiContentsTrait;

    public function getHighlight(){
        $highlightItems = $this->getApiContents("1554.json?offset=1&limit=5");
        if($highlightItems != null){
            $highlightItems = $highlightItems['data']['berita_highlight_page'];
        }
        return $highlightItems;
    }

    //duplicate
    public function getAllHighlight(){
        $highlightItems = $this->getApiContents("1554.json?offset=1&limit=10");
        if($highlightItems != null){
            $highlightItems = $highlightItems['data']['berita_highlight_page'];
        }
        return $highlightItems;
    }

    public function getNationalGovNews(){
        $nationalGovNews = $this->getApiContents("1555.json?offset=1&limit=5");
        if($nationalGovNews != null){
            $nationalGovNews = $nationalGovNews['data']['berita_satgas_page'];
        }
        return $nationalGovNews;
    }

    // duplicate
    public function getAllNationalGovNews(){
        $nationalGovNews = $this->getApiContents("1555.json?offset=1&limit=10");
        if($nationalGovNews != null){
            $nationalGovNews = $nationalGovNews['data']['berita_satgas_page'];
        }
        return $nationalGovNews;
    }

    public function getLocalGovNews(){
        $localGovNews = $this->getApiContents("1556.json?offset=1&limit=5");
        if($localGovNews != null){
            $localGovNews = $localGovNews['data']['berita_pemda_page'];
        }
        return $localGovNews;
    }

    public function getAllLocalGovNews(){
        $localGovNews = $this->getApiContents("1556.json?offset=1&limit=10");
        if($localGovNews != null){
            $localGovNews = $localGovNews['data']['berita_pemda_page'];
        }
        return $localGovNews;
    }

    public function getGalleryVideos(){
        $galleryVideos = $this->getApiContents("1523.json?offset=1&limit=5");
        if($galleryVideos != null){
            $galleryVideos = $galleryVideos['data']['galeri_video'];
        }
        return $galleryVideos;
    }

    public function getDetailNews($id = "0"){
        $detailNews = $this->getApiContents("1528.json?berita_id=".$id);
        if($detailNews != null){
            if(count($detailNews['data']['berita_detail']) < 1){
                $detailNews = null;
            }else{
                $detailNews = $detailNews['data']['berita_detail'][0];
            }  
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
