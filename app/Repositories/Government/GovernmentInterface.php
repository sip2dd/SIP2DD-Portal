<?php 

namespace App\Repositories\Government;

interface GovernmentInterface{
    public function getGoverment();
    public function getGovermentDetail($id);
}