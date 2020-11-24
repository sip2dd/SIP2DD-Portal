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

    public function getEducation($id = null, $offset=null, $limit=4){
        if($offset == null){
            $eduItems = $this->getApiContents("1576.json?offset=null&limit=".$limit);
        }else{
            $eduItems = $this->getApiContents("1576.json?&offset=".$offset."&limit=".$limit);
        }

        if($eduItems != null){
            $eduItems = $eduItems['data']['edukasi_list'];
        }
        return $eduItems;
    }

}