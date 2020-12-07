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

    public function getCountFAQ(){
        $items = $this->getApiContents("1600.json");
        if($items != null){
            $items = $items['data']['faq_count'][0]['cnt'];
        }
        return $items;
    }

    public function getSearchFAQ($keyword, $offset, $limit){
        if($offset == null){
            $items = $this->getApiContents("1601.json?input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $items = $this->getApiContents("1601.json?input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($items != null){
            $items = $items['data']['faq_search'];
            if(count($items) == 0){
                $items = null;
            }
        }
        return $items;
    }

    public function getCountSearchFAQ($keyword){
        $items = $this->getApiContents("1602.json?input=".$keyword);
        if($items != null){
            $items = $items['data']['faq_search_count'][0]['cnt'];
        }
        return $items;
    }

}