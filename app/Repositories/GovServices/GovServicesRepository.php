<?php 

namespace App\Repositories\GovServices;
use App\Repositories\GovServices\GovServicesInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovServicesRepository implements GovServicesInterface{
    use ApiContentsTrait;

    public function getGovServices($offset=null, $limit=6){
        if($offset != null){
            $govServices = $this->getApiContents("1535.json?offset=".$offset."&limit=".$limit);
        }else{
            $govServices = $this->getApiContents("1535.json?offset=null&limit=".$limit);
        }

        if($govServices != null){
            $govServices = $govServices['data']['layanan_list'];
        }
        return $govServices;
    }
    
    public function getCountServices(){
        $govServices = $this->getApiContents("1575.json");
        if($govServices != null){
            $govServices = $govServices['data']['cnt_layanan'][0]['cnt'];
        }
        return $govServices;
    }

    public function getGovServicesbyCode($code = null, $offset = null, $limit = 6){
        if($offset != null){
            $govServices = $this->getApiContents("1559.json?instansi_id=".$code."&offset=".$offset."&limit=".$limit);
        }else{
            $govServices = $this->getApiContents("1559.json?instansi_id=".$code."&offset=null&limit=".$limit);
        }

        if($govServices != null){
            $govServices = $govServices['data']['layanan_instansi'];
        }
        return $govServices;
    }

    public function getDetailService($id){
        $govServices = $this->getApiContents("1536.json?layanan_id=".$id);
        if($govServices != null){
            if(count($govServices['data']['layanan_detail']) < 1){
                $govServices = null;
            }else{
                $govServices = $govServices['data']['layanan_detail'][0];
            }  
        }
        return $govServices;

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

    public function getCountsearchServices($keyword){
        $newsItems = $this->getApiContents("1553.json?input=".$keyword);
        if($newsItems != null){
            $newsItems = $newsItems['data']['cnt_search'][0]['cnt'];
        }
        return $newsItems;
    }

    public function getListGov(){
        $govServices = $this->getApiContents("1563.json");
        if($govServices != null){
            $govServices = $govServices['data']['list_daerah'];
        }
        return $govServices;
    }

}