<?php

namespace App\Repositories\News;
use App\Repositories\News\NewsInterface;
use App\Http\Traits\ApiContentsTrait;

Class NewsRepository implements NewsInterface{
    use ApiContentsTrait;

    public function getHighlight($offset, $limit){
        //$highlightItems = $this->getApiContents("1554.json?offset=null&limit=3");
        
        if($offset != null){
            $highlightItems = $this->getApiContents("1554.json?offset=".$offset."&limit=".$limit);
        }else{
            $highlightItems = $this->getApiContents("1554.json?offset=null&limit=".$limit);
        }
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

    public function getLocalGovNewsbyId($id){
        $localGovNews = $this->getApiContents("1561.json?instansi_id?".$id."?offset=1&limit=10");
        if($localGovNews != null){
            $localGovNews = $localGovNews['data']['berita_instansi'];
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

    public function getDetailNewsAttachment($id  = "0"){
        $attchmentNews = $this->getApiContents("1564.json?berita_id=".$id);
        if($attchmentNews != null){
            if(count($attchmentNews['data']['lampiran_berita']) < 1){
                $attchmentNews = null;
            }else{
                $attchmentNews = $attchmentNews['data']['lampiran_berita'][0];
            }  
        }
        return $attchmentNews;
    }

    public function searchNews($keyword){
        $newsItems = $this->getApiContents("1532.json?input=".$keyword."&offset=null&limit=10");
        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
        }
        return $newsItems;
    }

    public function getCountHighlight(){
        $newsItems = $this->getApiContents("1550.json");
        if($newsItems != null){
            $newsItems = $newsItems['data']['cnt_highlight'][0]['cnt'];
          
        }
        return $newsItems;
    }

    public function getCountLocalGovNews(){
        
        $newsItems = $this->getApiContents("1551.json");
        if($newsItems != null){
            $newsItems = $newsItems['data']['cnt_pemda'][0]['cnt'];
        }
        return $newsItems;

    }

    public function getCountNationalGovNews(){
        $newsItems = $this->getApiContents("1552.json");
        if($newsItems != null){
            $newsItems = $newsItems['data']['cnt_satgas'][0]['cnt'];
        }
        return $newsItems;

    }

    public function getCountsearchNews($keyword){
        $newsItems = $this->getApiContents("1553.json?input=".$keyword);
        if($newsItems != null){
            $newsItems = $newsItems['data']['cnt_search'][0]['cnt'];
        }
        return $newsItems;
    }

    

}
