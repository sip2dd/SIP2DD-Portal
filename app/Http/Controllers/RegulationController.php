<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Regulation\RegulationInterface;
use Illuminate\Support\Facades\Validator;

class RegulationController extends Controller
{
    public function __construct(RegulationInterface $regRepo){
        $this->regRepo = $regRepo;
    }

    public function index(Request $request)
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

        //$menu = $this->getApiMenu();
        $menu = null;
        $regItems = $this->regRepo->getRegulation($offset, $limit);
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;
        $count = $this->regRepo->getCountRegulation();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('regulation.regulationPage',  [
            'menus' => $menu,
            'regItems' => $regItems,
            'p2dd_info' => $p2dd_info,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function searchRegulation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);
        $menu = null;
        $p2dd_info = null;

        $judul = "";
        $count = 0;
        $searchNews = null;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;
        if (!$validator->fails()) {
            $pages = $request->page;
            if($pages > 1){
                $offset = ($pages - 1) * 9; 
            } 
        }else{
            $pages = 1;
        }
        $tentang = $request->tentang ?? "null"; 
        $nomor =  $request->nomor ?? "null";
        $tahun = $request->tahun ?? "null"; 
        $status = $request->status ?? "null"; 

        if($status == "Pilih Status"){
            $status = "null";
        }

        if($tahun == "Input Tahun" || $tahun=="Semua Tahun"){
            $tahun = "null";
        }

        $searchReg = $this->regRepo->searchRegulation($tentang, $nomor, $tahun, $status, $offset, $limit);
        //$count = $this->regRepo->getCountsearchNews($judul);
        //dd($searchReg);
                
        if($count > $limit){
            $pagination = ceil($count / 9);
        } 
        
        return view('regulation.regulationPage',  [
            'menus' => $menu,
            'regItems' => $searchReg,
            'p2dd_info' => $p2dd_info,
            'count' => $count,
            'keyword' => $judul,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'title' => $judul
        ]);
    }

    public function getDetailRegulation(Request $request){
        
        $detailRegulation = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailRegulation = $this->regRepo->getDetailRegulation($id);
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }
        
        return view('news.detailNewsPage', [
            'detailNews' => $detailNews,    
        ],
        );
    }
}
