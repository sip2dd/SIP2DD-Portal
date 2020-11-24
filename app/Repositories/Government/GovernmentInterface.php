<?php 

namespace App\Repositories\Government;

interface GovernmentInterface{
    public function getGoverment();
    public function getListGoverment();
    public function getGovermentDetail($id);
    public function getGovHighlight($id, $offset, $limit);
    public function getGovNews($id, $offset, $limit);
    public function getGovServices($id, $offset, $limit);
    public function getGalleryGovPhotos($id, $offset, $limit);
}