<?php

namespace App\Repositories\News;

interface NewsInterface{
    public function getHighlight($offset, $limit);
    public function getNationalGovNews($offset, $limit);
    public function getLocalGovNews($offset, $limit);
    public function getGalleryVideos($offset, $limit);
    public function getDetailNews($id);
    public function getDetailNewsAttachment($id);
    public function searchNews($keyword, $offset, $limit);
    
    public function getLocalGovNewsbyId($id);
    
    public function getCountLocalGovNews();
    public function getCountNationalGovNews();
    public function getCountHighlight();
    public function getCountsearchNews($keyword);

}

