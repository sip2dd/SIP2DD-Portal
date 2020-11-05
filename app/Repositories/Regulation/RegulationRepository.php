<?php

namespace App\Repositories\Regulation;
use App\Repositories\Regulation\RegulationInterface;
use App\Http\Traits\ApiContentsTrait;

Class RegulationRepository implements RegulationInterface{

    use ApiContentsTrait;

    public function getRegulation(){
        $items = $this->getApiContents("1539.json");
        if($items != null){
            $items = $items['data']['regulasi_list'];
        }
        return $items;   
    }

    public function getDetailRegulation($id = "0"){
        $detailNews = $this->getApiContents("1540.json?regulasi_id=".$id);
        if($detailNews != null){
            if(count($detailNews['data']['regulasi_detail']) < 1){
                $detailNews = null;
            }else{
                $detailNews = $detailNews['data']['regulasi_detail'][0];
            }  
        }
        return $detailNews;
    }

}