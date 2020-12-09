<?php 

namespace App\Repositories\Government;
use App\Repositories\Government\GovernmentInterface;
use App\Http\Traits\ApiContentsTrait;

Class GovernmentRepository implements GovernmentInterface{
    use ApiContentsTrait;

    public function getGoverment($kode_daerah = null, $offset=null, $limit=6){
        
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

    public function getSortGoverment($sort = "asc", $offset=null, $limit=6){
        
        if($offset == null){
            $gov = $this->getApiContents("1584.json?sort=".$sort."&offset=null&limit=".$limit);
        }else{
            $gov = $this->getApiContents("1584.json?sort=".$sort."&offset=".$offset."&limit=".$limit);
        }

        // if($offset == null){
        //     $gov = $this->getApiContents("1541.json?offset=null&limit=".$limit);
        // }else{
        //     $gov = $this->getApiContents("1541.json?offset=".$offset."&limit=".$limit);
        // }

        if($gov != null){
            $gov = $gov['data']['unit_profile_sort'];
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
            $newsItems = $this->getApiContents("1585.json?instansi_id=".$id."&input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $newsItems = $this->getApiContents("1585.json?instansi_id=".$id."&input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($newsItems != null){
            $newsItems = $newsItems['data']['berita_instansi_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
        }
        return $newsItems;
    }

    public function getCountSearchGovNews($judul = null,$kode_daerah =null){
        $gov = $this->getApiContents("1586.json?instansi_id=".$kode_daerah."&input=".$judul);
        if($gov != null){
            $gov = $gov['data']['berita_iscnt'][0]['cnt'];
        }
        return $gov;
    }

    public function searchGovServices($keyword, $id = null, $offset=null, $limit=6){

        if($offset == null){
            $newsItems = $this->getApiContents("1589.json?instansi_id=".$id."&input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $newsItems = $this->getApiContents("1589.json?instansi_id=".$id."&input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($newsItems != null){
            $newsItems = $newsItems['data']['layanan_instansi_search'];
            if(count($newsItems) == 0){
                $newsItems = null;
            }
        }
        return $newsItems;
    }

    public function getCountSearchGovServices($judul = null,$kode_daerah =null){
        $gov = $this->getApiContents("1590.json?instansi_id=".$kode_daerah."&input=".$judul);
        if($gov != null){
            $gov = $gov['data']['layanan_iscnt'][0]['cnt'];
        }
        return $gov;
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

    public function getCountGovServices($id = null){
       
        $govServices = $this->getApiContents("1588.json?instansi_id=".$id);
        
        if($govServices != null){
            $govServices = $govServices['data']['layanan_instansi_count'][0]['cnt'];
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

    public function getGalleryGovPhotos($id = null, $offset=null, $limit=4){
        if($offset == null){
            $galleryPhotos = $this->getApiContents("1560.json?instansi_id=".$id."&offset=null&limit=".$limit);
        }else{
            $galleryPhotos = $this->getApiContents("1560.json?instansi_id=".$id."&offset=".$offset."&limit=".$limit);
        }
        if($galleryPhotos != null){
            $galleryPhotos = $galleryPhotos['data']['galeri_gambar_instansi'];
        }
        return $galleryPhotos;
    }

    public function getCountGovPhotos($code = null){
        $gov = $this->getApiContents("1591.json?instansi_id=".$code);
        if($gov != null){
            $gov = $gov['data']['galeri_gambar_iscnt'][0]['cnt'];
        }
        return $gov;
    }

    public function searchGovGalleryPhoto($keyword, $id = null, $offset=null, $limit=6){

        if($offset == null){
            $items = $this->getApiContents("1593.json?instansi_id=".$id."&input=".$keyword."&offset=null&limit=".$limit);
        }else{
            $items = $this->getApiContents("1593.json?instansi_id=".$id."&input=".$keyword."&offset=".$offset."&limit=".$limit);
        }

        if($items != null){
            $items = $items['data']['galeri_gambar_isearch'];
            if(count($items) == 0){
                $items = null;
            }
        }
        return $items;
    }


    public function getCountSearchGovGallery($judul = null,$kode_daerah =null){
        $gov = $this->getApiContents("1596.json?instansi_id=".$kode_daerah."&input=".$judul);
        if($gov != null){
            $gov = $gov['data']['galeri_gambar_iscnt'][0]['cnt'];
        }
        return $gov;
    }

}