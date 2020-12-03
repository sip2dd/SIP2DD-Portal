<?php

namespace App\Repositories\Event;
use App\Repositories\Event\EventInterface;
use App\Http\Traits\ApiContentsTrait;

Class EventRepository implements EventInterface{

    use ApiContentsTrait;

    public function getEvent($offset=null, $limit=3){
        if($offset != null){
            $items = $this->getApiContents("1537.json?offset=".$offset."&limit=".$limit);
        }else{
            $items = $this->getApiContents("1537.json?offset=null&limit=".$limit);
        }
        
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

    public function getCountEvent(){
        $eventItems = $this->getApiContents("1572.json");
        if($eventItems != null){
            $eventItems = $eventItems['data']['cnt_kegiatan'][0]['cnt'];
        }
        return $eventItems;
    }

    public function searchEvent($keyword, $offset=null, $limit=6){
        // $newsItems = $this->getApiContents("1532.json?judul=".$keyword."&kata_kunci=".$keyword);
        if($offset == null){
            $newsItems = $this->getApiContents("1569.json?input=".$keyword."&offset=null&limit=10");
        }else{
            $newsItems = $this->getApiContents("1569.json?input=".$keyword."&offset=".$offset."&limit=10");
        }
        
        //$newsItems = $this->getApiContents("1532.json?input=".$keyword."&offset=null&limit=10");
        if($newsItems != null){
            $newsItems = $newsItems['data']['kegiatan_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
        }
        return $newsItems;
    }

}