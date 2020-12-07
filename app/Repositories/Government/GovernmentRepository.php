<?php 

namespace App\Repositories\Government;
use App\Repositories\Government\GovernmentInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovernmentRepository implements GovernmentInterface{
    use ApiContentsTrait;

    public function getGoverment($kode_daerah = null, $offset=null, $limit=6){
        // $gov = $this->getApiContents("1541.json");
        // if($gov != null){
        //     $gov = $gov['data']['unit_profile'];
        // }
        if($offset == null){
            $gov = $this->getApiContents("1562.json?kode_daerah=".$kode_daerah."&offset=null&limit=".$limit);
        }else{
            $gov = $this->getApiContents("1562.json?kode_daerah=".$kode_daerah."&offset=".$offset."&limit=".$limit);
        }

        // if($offset == null){
        //     $gov = $this->getApiContents("1541.json?offset=null&limit=".$limit);
        // }else{
        //     $gov = $this->getApiContents("1541.json?offset=".$offset."&limit=".$limit);
        // }
        
        if($gov != null){
            $gov = $gov['data']['selected_unit'];
        }
        return $gov;
    }

    public function getCountGovernment(){
        $gov = $this->getApiContents("1583.json");
        if($gov != null){
            $gov = $gov['data']['unit_profile_count'][0]['cnt'];
        }
        return $gov;
    }

    public function getListGoverment(){
        $gov = $this->getApiContents("1563.json");
        if($gov != null){
            $gov = $gov['data']['list_daerah'];
        }
        return $gov;
    }

    public function getGovermentDetail($id){
        
        $detailGov = $this->getApiContents("1542.json?instansi_id=".$id);
        // dd($detailGov);
        if($detailGov != null){
            if(count($detailGov['data']['unit_profile_detail']) < 1){
                $detailGov = null;
            }else{
                $detailGov = $detailGov['data']['unit_profile_detail'][0];
            }  
            //$detailGov = $detailGov['data']['unit_profile_detail'][0];
        }
        return $detailGov;
    }

    public function getGovHighlight($id = null, $offset=null, $limit=4){
        if($offset == null){
            $newsItems = $this->getApiContents("1561.json?instansi_id=".$id."&offset=null&limit=".$limit);
        }else{
            $newsItems = $this->getApiContents("1561.json?instansi_id=".$id."&offset=".$offset."&limit=".$limit);
        }

        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_instansi'];
        }
        return $newsItems;
    }

    public function getGovNews($id = null, $offset=null, $limit=4){
        if($offset == null){
            $newsItems = $this->getApiContents("1561.json?instansi_id=".$id."&offset=null&limit=".$limit);
        }else{
            $newsItems = $this->getApiContents("1561.json?instansi_id=".$id."&offset=".$offset."&limit=".$limit);
        }
        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_instansi'];
        }
        return $newsItems;
    }

    public function getCountGovNews($code = null){
        $gov = $this->getApiContents("1587.json?instansi_id=".$code);
        if($gov != null){
            $gov = $gov['data']['berita_instansi_count'][0]['cnt'];
        }
        return $gov;
    }

    public function searchGovNews($keyword, $id = null, $offset=null, $limit=6){

        if($offset == null){
            $newsItems = $this->getApiContents("1585.json?instansi_id".$id."&input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $newsItems = $this->getApiContents("1585.json?instansi_id".$id."&input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_instansi_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
        }
        return $newsItems;
    }

    public function getGovServices($id = null, $offset=null, $limit=4){
        if($offset == null){
            $govServices = $this->getApiContents("1559.json?instansi_id=".$id."&offset=null&limit=".$limit);
        }else{
            $govServices = $this->getApiContents("1559.json?instansi_id=".$id."&offset=".$offset."&limit=".$limit);
        }
        if($govServices != null){
            $govServices = $govServices['data']['layanan_instansi'];
        }
        return $govServices;
    }

    public function getGalleryGovVideos($id = null, $offset=null, $limit=4){
        if($offset == null){
            $galleryPhotos = $this->getApiContents("1557.json?instansi_id=".$id."&offset=null&limit=".$limit);
        }else{
            $galleryPhotos = $this->getApiContents("1557.json?instansi_id=".$id."&offset=".$offset."&limit=".$limit);
        }
        if($galleryPhotos != null){
            $galleryPhotos = $galleryPhotos['data']['galeri_video_instansi'];
        }
        return $galleryPhotos;
    }

}