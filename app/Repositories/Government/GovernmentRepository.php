<?php 

namespace App\Repositories\Government;
use App\Repositories\Government\GovernmentInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovernmentRepository implements GovernmentInterface{
    use ApiContentsTrait;

    public function getGoverment(){
        $gov = $this->getApiContents("1535.json");
        return $gov;
    }

    public function getGovermentDetail($id){
        $gov = $this->getApiContents("1536.json?unit_id=".$id);
        return $gov;
    }

}