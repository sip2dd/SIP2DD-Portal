<?php

namespace App\Repositories\News;

interface NewsInterface{
    public function getHighlight($offset, $limit);
    public function getAllHighlight();
    public function getNationalGovNews();
    public function getAllNationalGovNews();
    public function getLocalGovNews();
    public function getAllLocalGovNews();
    public function getGalleryVideos();
    public function getDetailNews($id);
    public function getDetailNewsAttachment($id);
    public function searchNews($keyword);
    public function getLocalGovNewsbyId($id);
    
    public function getCountLocalGovNews();
    public function getCountNationalGovNews();
    public function getCountHighlight();
    public function getCountsearchNews($keyword);

}

