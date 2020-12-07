<?php 

namespace App\Repositories\Education;
use App\Repositories\Education\EducationInterface;
use App\Http\Traits\ApiContentsTrait;

Class EducationRepository implements EducationInterface{
    use ApiContentsTrait;

    public function getEducationDetail($id){
        
        $detailEdu = $this->getApiContents("1577.json?edukasi_id=".$id);
        if($detailEdu != null){
            if(count($detailEdu['data']['edukasi_detail']) < 1){
                $detailEdu = null;
            }else{
                $detailEdu = $detailEdu['data']['edukasi_detail'][0];
            }  
        }
        return $detailEdu;
    }

    public function getEducation($offset=null, $limit=4){
        if($offset == null || $offset == "null" || $offset=""){
            $eduItems = $this->getApiContents("1576.json?offset=null&limit=".$limit);
        }else{
            $eduItems = $this->getApiContents("1576.json?offset=".$offset."&limit=".$limit);
        }

        //$eduItems = $this->getApiContents("1576.json?offset=null&limit=".$limit);
        
        if($eduItems != null){
            $eduItems = $eduItems['data']['edukasi_list'];
        }
        return $eduItems;
    }

    public function getCountEducation(){
        $edu = $this->getApiContents("1597.json");
        if($edu != null){
            $edu = $edu['data']['edukasi_list_count'][0]['cnt'];
        }
        return $edu;
    }

    public function getSearchEducation($keyword, $offset=null, $limit=6){

        if($offset == null){
            $eduItems = $this->getApiContents("1598.json?input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $eduItems = $this->getApiContents("1598.json?input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($eduItems != null){
            $eduItems = $eduItems['data']['edukasi_search'];
            if(count($eduItems) == 0){
                $eduItems = null;
            }
        }
        return $eduItems;
    }

    public function getCountSearchEducation($keyword){
        $eduItems = $this->getApiContents("1599.json?input=".$keyword);
        if($eduItems != null){
            $eduItems = $eduItems['data']['edukasi_search_count'][0]['cnt'];
        }
        return $eduItems;
    }

}