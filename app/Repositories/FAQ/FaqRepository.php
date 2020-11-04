<?php

namespace App\Repositories\FAQ;
use App\Repositories\FAQ\FaqInterface;
use App\Http\Traits\ApiContentsTrait;

Class FaqRepository implements FaqInterface{

    use ApiContentsTrait;

    public function getFAQ(){
        $items = $this->getApiContents("1544.json");
        if($items != null){
            $items = $items['data']['faq'];
        }
        return $items;
        
    }

}