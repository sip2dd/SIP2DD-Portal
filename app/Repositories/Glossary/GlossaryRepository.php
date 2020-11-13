<?php

namespace App\Repositories\Glossary;
use App\Repositories\Glossary\GlossaryInterface;
use App\Http\Traits\ApiContentsTrait;

Class GlossaryRepository implements GlossaryInterface{

    use ApiContentsTrait;

    public function getGlossary(){
        $items = $this->getApiContents("1566.json");
        if($items != null){
            $items = $items['data']['daftar_istilah'];
        }
        return $items;
    }

}