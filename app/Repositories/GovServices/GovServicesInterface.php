<?php 

namespace App\Repositories\GovServices;

interface GovServicesInterface{
    public function getServices();
    public function getLocalGovServices();
    public function getDetailService();
    public function searchServices();
}