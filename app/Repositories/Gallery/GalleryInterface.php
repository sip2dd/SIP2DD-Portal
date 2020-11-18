<?php 

namespace App\Repositories\Gallery;

interface GalleryInterface{
    public function getGalleryVideos($offset);
    public function getCountGalleryVideos();
    public function getGalleryPhotos($offset);
    public function getCountGalleryPhotos();
    public function getDetailGalleryVideo($id);
    public function getDetailGalleryPhoto($id);
    public function getGalleryVideosbyLocalGov();
    public function getGalleryPhotosbyLocalGov();
}