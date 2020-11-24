<?php

namespace App\Http\Controllers;
use App\Repositories\Government\GovernmentInterface;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    public function __construct(GovernmentInterface $govRepo){
        $this->govRepo = $govRepo;
    }

    public function index()
    {
        $governments = $this->govRepo->getGoverment(); 
        $list_gov = $this->govRepo->getListGoverment(); 
         return view('government.governmentPage', ['governments' => $governments, 'list_gov' => $list_gov]);
    }

    public function detailGov(Request $request)
    {
        $offset = null;
        $limit = 6;
        // get detail pemda 
        $govDetail = null;
        $govNewsHighlights = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $id = 1328;
                $govNewsHighlights = $this->govRepo->getGovHighlight($id, $offset, $limit);
                $govNews = $this->govRepo->getGovNews($id, $offset, 4); 
                $govServices = $this->govRepo->getGovServices($id, $offset, $limit);
                $galleryGovPhotos = $this->govRepo->getGalleryGovPhotos($id, $offset, $limit);   
            }else{
                return redirect('');
            }
        }elseif($request->has('kode_daerah')){
            if($request->kode_daerah != ''){
                $id = $request->kode_daerah;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $govNewsHighlights = $this->govRepo->getGovHighlight($id, $offset, $limit);
                $govNews = $this->govRepo->getGovNews($id, $offset, 4); 
                $govServices = $this->govRepo->getGovServices($id, $offset, $limit);
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
            'galleryGovPhotos' => $galleryGovPhotos,
        ]);
    }

    public function newsGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 9;

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
                $count = 1;
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
             'govNews' => $govNews,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             ]);
    }

    public function servicesGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 9;

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
                $govServices = $this->govRepo->getGalleryGovPhotos($id, $offset, $limit);   
                $count = 1;
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

         return view('government.governmentServicePage', [
             'govServices' => $govServices,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             ]);
    }

    public function galleryGov(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 9;

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
                $galleryPhotos = $this->govRepo->getGalleryGovPhotos($kode_daerah, $offset, $limit);    
                $count = 1;
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

         return view('government.governmentGalleryPage', [
             'galleryPhotos' => $galleryPhotos,
             'govDetail' => $govDetail,
             'count' => $count,
             'page' => $pages ?? 1,
             'pagination' => $pagination,
             ]);
    }

}
