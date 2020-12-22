<?php 

namespace App\Repositories\GovServices;

interface GovServicesInterface{
    public function getGovServices($offset, $limit);
    public function getGovServicesbyCode($code, $offset, $limit);
    public function getDetailService($id);
    public function getDetailServiceFeature($id);
    public function searchServices($keyword, $offset, $limit);
    public function getCountsearchServices($keyword);
    public function getCountServices();
    public function getListGov();
    public function getCountServicesbyCode($code);
}