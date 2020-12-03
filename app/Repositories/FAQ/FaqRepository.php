<?php

namespace App\Repositories\FAQ;
use App\Repositories\FAQ\FaqInterface;
use App\Http\Traits\ApiContentsTrait;

Class FaqRepository implements FaqInterface{

    use ApiContentsTrait;

    public function getFAQ($offset = null, $limit = 6){
        
        if($offset != null){
            $items = $this->getApiContents("1544.json?offset=".$offset."&limit=".$limit);
        }else{
            $items = $this->getApiContents("1544.json?offset=null&limit=".$limit);
        }
        if($items != null){
            $items = $items['data']['faq'];
        }
        return $items;
        
    }

}