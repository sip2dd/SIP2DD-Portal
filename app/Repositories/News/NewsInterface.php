<?php

namespace App\Repositories\News;

interface NewsInterface{
    public function getHighlight();
    public function getAllHighlight();
    public function getNationalGovNews();
    public function getAllNationalGovNews();
    public function getLocalGovNews();
    public function getAllLocalGovNews();
    public function getGalleryVideos();
    public function getDetailNews($id);
    public function searchNews($keyword);

}

