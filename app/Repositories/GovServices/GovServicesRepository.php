<?php 

namespace App\Repositories\Gallery;
use App\Repositories\Gallery\GalleryInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovServicesRepository implements GovServicesInterface{
    use ApiContentsTrait;

    public function getServices(){
        $govServices = $this->getApiContents("1535.json");
        return $govServices;
    }

    public function getLocalGovServices(){
        $govServices = $this->getApiContents("1535.json");
        return $govServices;
    }

    public function getDetailService($id){
        $govServices = $this->getApiContents("1536.json?layanan_id=".$id);
        return $govServices;

    }

    public function searchServices(){
        $govServices = $this->getApiContents("1535.json");
        return $govServices;
    }

}