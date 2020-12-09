<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Regulation\RegulationInterface;
use App\Http\Traits\ApiContentsTrait;
use Illuminate\Support\Facades\Validator;

class RegulationController extends Controller
{

    use ApiContentsTrait;

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
        $p2dd_info =$this->getApiP2DDInfo();
        $regItems = $this->regRepo->getRegulation($offset, $limit);
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
        $p2dd_info =$this->getApiP2DDInfo();

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
                $offset = ($pages - 1) * $limit; 
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
        $count = $this->regRepo->getCountSearchRegulation($tentang, $nomor, $tahun, $status);
        //dd($searchReg);
                
        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('regulation.searchRegulationPage',  [
            'menus' => $menu,
            'tentang' => $tentang,
            'nomor' => $nomor,
            'tahun' => $tahun,
            'status' => $status,
            'regItems' => $searchReg,
            'p2dd_info' => $p2dd_info,
            'count' => $count,
            'keyword' => $judul,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'title' => $judul
        ]);
    }
}
