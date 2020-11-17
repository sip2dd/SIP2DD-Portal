<?php

namespace App\Repositories\Event;
use App\Repositories\Event\EventInterface;
use App\Http\Traits\ApiContentsTrait;

Class EventRepository implements EventInterface{

    use ApiContentsTrait;

    public function getEvent(){
        $items = $this->getApiContents("1537.json?offset=null&limit=5");
        if($items != null){
            $items = $items['data']['kegiatan_list'];
        }
        return $items;
        
    }
    
    public function getAllEvent(){
        $items = $this->getApiContents("1537.json?offset=null&limit=10");
        if($items != null){
            $items = $items['data']['kegiatan_list'];
        }
        return $items;
    }

    public function getDetailEvent($id = "0"){
        $detailEvent = $this->getApiContents("1538.json&kegiatan_id=".$id);
        if($detailEvent != null){
            if(count($detailEvent['data']['kegiatan_detail']) < 1){
                $detailEvent = null;
            }else{
                $detailEvent = $detailEvent['data']['kegiatan_detail'][0];
            }  
        }
        return $detailEvent;
    }

}