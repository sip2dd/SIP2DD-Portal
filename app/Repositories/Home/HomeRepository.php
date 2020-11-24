<?php

namespace App\Repositories\Home;
use App\Repositories\Home\HomeInterface;
use App\Http\Traits\ApiContentsTrait;

Class HomeRepository implements HomeInterface{

    use ApiContentsTrait;
    
    public function getGovServices(){
        $govServices = $this->getApiContents("1535.json?offset=null&limit=6");
        if($govServices != null){
            $govServices = $govServices['data']['layanan'];
        }
        return $govServices;
    }

    public function getNewsItems(){
        $newsItems = $this->getApiContents("1554.json?offset=1&limit=5");
        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_highlight_page'];
        }
        return $newsItems;
    }

    public function getEducationNewsItems($offset = null, $limit = 10){
        if($offset == null){
            $eduNewsItems = $this->getApiContents("1576.json?offset=null&limit=".$limit);
        }else{
            $eduNewsItems = $this->getApiContents("1576.json?&offset=".$offset."&limit=".$limit);
        }

        if($eduNewsItems != null){
            $eduNewsItems = $eduNewsItems['data']['edukasi_list'];
        }
        return $eduNewsItems;
    }

    public function getGalleryNewsItems(){
        $galleryNewsItems = $this->getApiContents("1533.json?offset=null&limit=5");
        if($galleryNewsItems != null){
            $galleryNewsItems = $galleryNewsItems['data']['galeri_gambar'];
        }
        return $galleryNewsItems;
    }

    public function searchNewsItems($keyword, $offset=null, $limit = 6){
        // $newsItems = $this->getApiContents("1532.json?judul=".$keyword."&kata_kunci=".$keyword);
        if($offset == null){
            $newsItems = $this->getApiContents("1532.json?input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $newsItems = $this->getApiContents("1532.json?input=".$keyword."&offset=".$offset."&limit=".$limit);
        }
        
        //$newsItems = $this->getApiContents("1532.json?input=".$keyword."&offset=null&limit=10");
        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
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

    public function searchServices($keyword, $offset=null, $limit=6){
        if($offset == null){
            $govServices = $this->getApiContents("1558.json?input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $govServices = $this->getApiContents("1558.json?input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($govServices != null){
            $govServices = $govServices['data']['layanan_search'];
            if(count($govServices) == 0){
                $govServices = null;
            }
        }
        return $govServices;
    }
}