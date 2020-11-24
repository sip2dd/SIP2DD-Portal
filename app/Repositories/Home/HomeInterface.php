<?php

namespace App\Repositories\Home;

interface HomeInterface{
    public function getGovServices();
    public function getNewsItems();
    public function getEducationNewsItems($offset, $limit);
    public function getGalleryNewsItems();
    public function searchNewsItems($keyword, $offset, $limit);
    public function getCountsearchNews($keyword);
    public function searchServices($keyword, $offset, $limit);
}