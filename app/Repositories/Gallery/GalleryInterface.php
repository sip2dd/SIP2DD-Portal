<?php 

namespace App\Repositories\Gallery;

interface GalleryInterface{
    public function getGalleryVideos($offset, $limit);
    public function getCountGalleryVideos();
    public function getGalleryPhotos($offset, $limit);
    public function getGalleryPhotosAtt($id);
    public function getCountGalleryPhotos();
    public function getDetailGalleryVideo($id);
    public function getDetailGalleryPhoto($id);
    public function searchGalleryPhoto($keyword, $offset, $limit);
    public function searchGalleryVideo($keyword, $offset, $limit);
    public function getGalleryVideosbyLocalGov();
    public function getGalleryPhotosbyLocalGov();
}