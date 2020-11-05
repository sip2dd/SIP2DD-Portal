<?php

namespace App\Repositories\Event;
use App\Repositories\Event\EventInterface;
use App\Http\Traits\ApiContentsTrait;

Class EventRepository implements EventInterface{

    use ApiContentsTrait;

    public function getEvent(){
        $items = $this->getApiContents("1537.json");
        if($items != null){
            $items = $items['data']['kegiatan_list'];
        }
        return $items;
        
    }

}