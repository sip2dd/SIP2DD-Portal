<?php 

namespace App\Repositories\Government;

interface GovernmentInterface{
    public function getGoverment($kode_daerah, $offset, $limit);
    public function getSortGoverment($sort, $offset, $limit);
    public function getCountGovernment();
    public function getListGoverment();
    public function getGovermentDetail($id);
    public function getGovHighlight($id, $offset, $limit);

    public function getGovNews($id, $offset, $limit);
    public function searchGovNews($keyword, $id, $offset, $limit);
    public function getCountGovNews($code);
    public function getCountSearchGovNews($judul,$kode_daerah);
    
    public function getGovServices($id, $offset, $limit);
    public function getCountGovServices($id);
    public function searchGovServices($keyword, $id, $offset, $limit);
    public function getCountSearchGovServices($judul,$kode_daerah);
    
    public function getGalleryGovVideos($id, $offset, $limit);
}