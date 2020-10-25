<?php 

namespace App\Repositories\GovServices;

interface GovServicesInterface{
    public function getGovServices();
    public function getLocalGovServices();
    public function getDetailService($id);
    public function searchServices();
}