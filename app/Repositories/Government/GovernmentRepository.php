<?php 

namespace App\Repositories\Government;
use App\Repositories\Government\GovernmentInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovernmentRepository implements GovernmentInterface{
    use ApiContentsTrait;

    public function getGoverment(){
        $gov = $this->getApiContents("1541.json");
        if($gov != null){
            $gov = $gov['data']['unit_profile'];
        }
        return $gov;
    }

    public function getListGoverment(){
        $gov = $this->getApiContents("1563.json");
        if($gov != null){
            $gov = $gov['data']['list_daerah'];
        }
        return $gov;
    }

    public function getGovermentDetail($id){
        
        $detailGov = $this->getApiContents("1542.json?unit_profile_id=".$id);
        if($detailGov != null){
            if(count($detailGov['data']['unit_profile_detail']) < 1){
                $detailGov = null;
            }else{
                $detailGov = $detailGov['data']['unit_profile_detail'][0];
            }  
        }
        return $detailGov;
    }

    public function getGovHighlight($id){
        $newsItems = $this->getApiContents("1527.json");
        if($newsItems != null){
            $newsItems = $newsItems['data']['highlight'];
        }
        return $newsItems;
    }

    public function getGovNews($id){
        $newsItems = $this->getApiContents("1527.json");
        if($newsItems != null){
            $newsItems = $newsItems['data']['highlight'];
        }
        return $newsItems;
    }

    public function getGovServices($id){
        $govServices = $this->getApiContents("1535.json");
        if($govServices != null){
            $govServices = $govServices['data']['layanan'];
        }
        return $govServices;
    }

    public function getGalleryGovPhotos($id){
        $galleryPhotos = $this->getApiContents("1533.json");
        if($galleryPhotos != null){
            $galleryPhotos = $galleryPhotos['data']['galeri_gambar'];
        }
        return $galleryPhotos;
    }

}