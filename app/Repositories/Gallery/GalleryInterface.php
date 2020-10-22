<?php 

namespace App\Repositories\Gallery;

interface GalleryInterface{
    public function getGalleryVideos();
    public function getGalleryPhotos();
    public function getDetailGalleryVideo($id);
    public function getDetailGalleryPhoto($id);
    public function getGalleryVideosbyLocalGov();
    public function getGalleryPhotosbyLocalGov();
}