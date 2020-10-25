<?php 

namespace App\Repositories\Government;

interface GovernmentInterface{
    public function getGoverment();
    public function getGovermentDetail($id);
    public function getGovHighlight($id);
    public function getGovNews($id);
    public function getGovServices($id);
    public function getGalleryGovPhotos($id);
}