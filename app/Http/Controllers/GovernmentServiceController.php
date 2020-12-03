<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GovServices\GovServicesInterface;
use Illuminate\Support\Facades\Validator;

class GovernmentServiceController extends Controller
{
    public function __construct(GovServicesInterface $govService){
        $this->govService = $govService;
    }

    public function index(Request $request){
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

        $govServices = $this->govService->getGovServices($offset, $limit);  
        $listGovs = $this->govService->getListGov(); 

        $count = $this->govService->getCountServices();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('govService.govServicePage', [
            'govServices' => $govServices,
            'listGovs' => $listGovs,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function detailServiceGov(Request $request){
        $detailGovServices = null;
        $feature = null;
        $video = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailGovServices = $this->govService->getDetailService($id);  
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }
        
        return view('govService.detailGovServicePage', [
            'detailGovServices' => $detailGovServices,
            'feature' => $feature,
            'video' => $video, 
        ],
        );
    }

    public function searchServices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $judul = "";
        $count = 0;
        $searcServices = null;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;
        if($request->has('keyword')) {
            if($request->keyword != ''){
                $judul = $request->keyword;
                if (!$validator->fails()) {
                    $pages = $request->page;
                    if($pages > 1){
                        $offset = ($pages - 1) * 9; 
                    } 
                }else{
                    $pages = 1;
                }
                $searcServices = $this->govService->searchServices($judul, $offset, $limit);
                $count = $this->govService->getCountsearchServices($judul);
                
                if($count > 9){
                    $pagination = ceil($count / 9);
                } 
            }
        }

        $listGovs = $this->govService->getListGov(); 
        
        return view('govService.govServicePage', [
            'count' => $count,
            'keyword' => $judul,
            'listGovs' => $listGovs,
            'govServices' => $searcServices,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'title' => $judul
        ]);
    }

    public function servicebyCode(Request $request){
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 4;
        $kode_daerah = "";
        $count = 0;
        $govServices = null;

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

        if($request->has('kode_daerah')) {
            if($request->kode_daerah != ''){
                $kode_daerah = $request->kode_daerah;
                if (!$validator->fails()) {
                    $pages = $request->page;
                    if($pages > 1){
                        $offset = ($pages - 1) * $limit; 
                    } 
                }else{
                    $pages = 1;
                }

                $govServices = $this->govService->getGovServicesbyCode($kode_daerah, $offset, $limit);
                $count = 0;
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }

        $listGovs = $this->govService->getListGov(); 

        return view('govService.govServicePage', [
            'govServices' => $govServices,
            'listGovs' => $listGovs,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

}
