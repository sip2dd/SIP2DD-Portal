<?php

namespace App\Http\Controllers;
use App\Repositories\Government\GovernmentInterface;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ApiContentsTrait;

use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    use ApiContentsTrait;

    public function __construct(GovernmentInterface $govRepo){
        $this->govRepo = $govRepo;
    }

    public function index(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;
        $count = 0;
        $kode_daerah = null;
        $sort = null;

        if($request->has('kode_daerah')) {
            $kode_daerah = $request->kode_daerah;
        }

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $count = $this->govRepo->getCountGovernment();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        }
        
        if($request->has('sort')) {
            $sort = strtolower($request->sort);
            if( $sort != 'asc' && $sort != 'desc'){
                $sort = 'asc';
            }
            $governments = $this->govRepo->getSortGoverment($sort, $offset, $limit);
        }else{
            $governments = $this->govRepo->getGoverment($kode_daerah, $offset, $limit);    
        }

        $list_gov = $this->govRepo->getListGoverment();
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

         return view('government.governmentPage', [
            'governments' => $governments, 
            'list_gov' => $list_gov,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'p2dd_info' => $p2dd_info,
            'menus' => $menus,
            'sort' => $sort
             ]);
    }

    public function detailGov(Request $request)
    {
        $offset = null;
        $limit = 6;
        // get detail pemda 
        $govDetail = null;
        $govNewsHighlights = null;
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $id = 1328;
                $govNewsHighlights = $this->govRepo->getGovHighlight($id, $offset, $limit);
                $govNews = $this->govRepo->getGovNews($id, $offset, 4); 
                $govServices = $this->govRepo->getGovServices($id, $offset, $limit);
                $galleryGovVideos = $this->govRepo->getGalleryGovVideos($id, $offset, $limit);
                $galleryGovPhotos = $this->govRepo->getGalleryGovPhotos($id, $offset, $limit);   
            }else{
                return redirect('');
            }
        }elseif($request->has('kode_daerah')){
            if($request->kode_daerah != ''){
                $id = $request->kode_daerah;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                //$govDetail = $this->govRepo->getGoverment($id);
               
                $govNewsHighlights = $this->govRepo->getGovHighlight($id, $offset, $limit);
                
                $govNews = $this->govRepo->getGovNews($id, $offset, 4); 
                
                $govServices = $this->govRepo->getGovServices($id, $offset, $limit);
                
                $galleryGovVideos = $this->govRepo->getGalleryGovVideos($id, $offset, $limit);
                $galleryGovPhotos = $this->govRepo->getGalleryGovPhotos($id, $offset, $limit);   
                
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        return view('government.detailGovernmentPage', [
            'govDetail' => $govDetail, 
            'govNewsHighlights' => $govNewsHighlights,
            'govNews' => $govNews,
            'govServices' => $govServices,
            'galleryGovVideos' => $galleryGovVideos,
            'galleryGovPhotos' => $galleryGovPhotos,
            'menus' => $menus,
            'p2dd_info' => $p2dd_info
        ]);
    }

    public function newsGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;
        $id = null;
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $govDetail = null;
        $govNews = null;
        
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $kode_daerah = 1328;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $govNews = $this->govRepo->getGovNews($kode_daerah, $offset, $limit);    
                $count = $this->govRepo->getCountGovNews($kode_daerah);
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

         return view('government.governmentNewsPage', [
             'kode_daerah' =>$id,
             'govNews' => $govNews,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             'menus' => $menus,
             'p2dd_info' => $p2dd_info
             ]);
    }

    public function searchNewsGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;
        $id = null;
        
        $judul = "";
        $count = 0;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $govDetail = null;
        $govNews = null;
        
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                //$kode_daerah = 1328;
                $kode_daerah = $id;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                
                if($request->has('keyword')) {
                    if($request->keyword != ''){
                        $judul = $request->keyword;
                        if (!$validator->fails()) {
                            $pages = $request->page;
                            if($pages > 1){
                                $offset = ($pages - 1) * $limit; 
                            } 
                        }else{
                            $pages = 1;
                        }
                        // $searchNews = $this->newsRepo->searchNews($judul, $offset, $limit);
                        // $count = $this->newsRepo->getCountsearchNews($judul);

                        $govNews = $this->govRepo->searchGovNews($judul, $kode_daerah, $offset, $limit);    
                        $count = $this->govRepo->getCountSearchGovNews($judul,$kode_daerah);
                        
                        if($count > $limit){
                            $pagination = ceil($count / $limit);
                        } 
                    }
                }
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

         return view('government.governmentSearchNewsPage', [
             'kode_daerah' =>$id,
             'title' => $judul,
             'govNews' => $govNews,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             'menus' => $menus,
             'p2dd_info' => $p2dd_info
             ]);
    }

    public function servicesGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;
        $count = 1;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $govDetail = null;
        $govNews = null;
        
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                //$kode_daerah = 1328;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $govServices = $this->govRepo->getGovServices($id, $offset, $limit);   
                
                $count = $this->govRepo->getCountGovServices($id);
               
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();


         return view('government.governmentServicePage', [
             'id' => $id,
             'govServices' => $govServices,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             'menus' => $menus,
             'p2dd_info' => $p2dd_info
             ]);
    }

    public function searchServicesGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;
        $id = null;
        
        $judul = "";
        $count = 0;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $govDetail = null;
        $govServices = null;
        
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                //$kode_daerah = 1328;
                $kode_daerah = $id;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                
                if($request->has('keyword')) {
                    if($request->keyword != ''){
                        $judul = $request->keyword;
                        if (!$validator->fails()) {
                            $pages = $request->page;
                            if($pages > 1){
                                $offset = ($pages - 1) * $limit; 
                            } 
                        }else{
                            $pages = 1;
                        }
                        
                        $govServices = $this->govRepo->searchGovServices($judul, $kode_daerah, $offset, $limit);    
                        $count = $this->govRepo->getCountSearchGovServices($judul,$kode_daerah);
                        
                        if($count > $limit){
                            $pagination = ceil($count / $limit);
                        } 
                    }
                }
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        return view('government.governmentSearchServicePage', [
                'id' => $id,
                'title' => $judul,
                'govServices' => $govServices,
                'govDetail' => $govDetail,
                'count' => $count,
                'page' => $pages ?? 1,
                'pagination' => $pagination,
                'menus' => $menus,
                'p2dd_info' => $p2dd_info
                ]);
    }

    public function galleryGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $govDetail = null;
        $govNews = null;
        
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $kode_daerah = $id;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $galleryPhotos = $this->govRepo->getGalleryGovPhotos($kode_daerah, $offset, $limit);    
                $count =  $this->govRepo->getCountGovPhotos($kode_daerah);
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

         return view('government.governmentGalleryPage', [
             'id' => $id,
             'galleryPhotos' => $galleryPhotos,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             'menus' => $menus,
             'p2dd_info' => $p2dd_info
             ]);
    }

    public function searchGalleryGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 6;
        $id = null;
        
        $judul = "";
        $count = 0;
        $p2dd_info = $this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * $limit; 
            } 
        }else{
            $pages = 1;
        }

        $govDetail = null;
        $galleryPhotos = null;
        
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                //$kode_daerah = 1328;
                $kode_daerah = $id;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                
                if($request->has('keyword')) {
                    if($request->keyword != ''){
                        $judul = $request->keyword;
                        if (!$validator->fails()) {
                            $pages = $request->page;
                            if($pages > 1){
                                $offset = ($pages - 1) * $limit; 
                            } 
                        }else{
                            $pages = 1;
                        }
                        
                        $galleryPhotos = $this->govRepo->searchGovGalleryPhoto($judul, $kode_daerah, $offset, $limit);    
                        $count = $this->govRepo->getCountSearchGovGallery($judul,$kode_daerah);
                        
                        if($count > $limit){
                            $pagination = ceil($count / $limit);
                        } 
                    }
                }
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('government.governmentSearchGalleryPage', [
                'kode_daerah' => $id,
                'title' => $judul,
                'galleryPhotos' => $galleryPhotos,
                'govDetail' => $govDetail,
                'count' => $count,
                'page' => $pages ?? 1,
                'pagination' => $pagination,
                'menus' => $menus,
                'p2dd_info' => $p2dd_info
                ]);
    }

}
