<?php

namespace App\Repositories\Home;

interface HomeInterface{
    public function getGovServices();
    public function getNewsItems();
    public function getEducationNewsItems();
    public function getGalleryNewsItems();
}