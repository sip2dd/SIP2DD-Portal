<?php

namespace App\Repositories\Regulation;
use App\Repositories\Regulation\RegulationInterface;
use App\Http\Traits\ApiContentsTrait;

Class RegulationRepository implements RegulationInterface{

    use ApiContentsTrait;

    public function getRegulation($offset=null, $limit = 6){
        if($offset != null){
            $items = $this->getApiContents("1539.json?offset=".$offset."&limit=".$limit);
        }else{
            $items = $this->getApiContents("1539.json?offset=null&limit=".$limit);
        }
        if($items != null){
            $items = $items['data']['regulasi_list'];
        }
        return $items;   
    }

    public function searchRegulation($tentang ="null", $nomor="null", $tahun="null", $status="null", $offset=null, $limit=10){
       // $items = $this->getApiContents("1573.json?tentang=".$tentang."&nomor=".$nomor."&tahun=".$tahun."&offset=".$offset."&limit=".$limit);
        //$items = $this->getApiContents("1573.json?tentang=1020&nomor=null&tahun=null&offset=null&limit=6");
        if($offset != null){
            $items = $this->getApiContents("1573.json?tentang=".$tentang."&nomor=".$nomor."&tahun=".$tahun."&status_peraturan=".$status."&offset=".$offset."&limit=".$limit);
        }else{
            $items = $this->getApiContents("1573.json?tentang=".$tentang."&nomor=".$nomor."&tahun=".$tahun."&status_peraturan=".$status."&offset=null&limit=".$limit);
        }
        
        if($items != null){
            $items = $items['data']['regulasi_filter'];
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