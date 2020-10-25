<?php 

namespace App\Repositories\GovServices;
use App\Repositories\GovServices\GovServicesInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovServicesRepository implements GovServicesInterface{
    use ApiContentsTrait;

    public function getGovServices(){
        $govServices = $this->getApiContents("1535.json");
        if($govServices != null){
            $govServices = $govServices['data']['layanan'];
        }
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