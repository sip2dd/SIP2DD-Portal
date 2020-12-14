<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Home\HomeInterface;
use App\Http\Traits\ApiContentsTrait;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use ApiContentsTrait;

    public function __construct(HomeInterface $homeRepo){
        $this->homeRepo = $homeRepo;
    }
    
    public function index()
    {
        $menus = $this->getApiMenu();
        // dd($menus);
        $newsItems = $this->homeRepo->getNewsItems();
        $govServices = $this->homeRepo->getGovServices(); 

        $eduNewsItems = $this->homeRepo->getEducationNewsItems();
        $galleryNewsItems = $this->homeRepo->getGalleryNewsItems();
        $p2dd_info = $this->getApiP2DDInfo();
        
        return view('home.homePage', [
            'menus' => $menus,
            'govServices' => $govServices,
            'newsItems' => $newsItems,
            'eduNewsItems' => $eduNewsItems,
            'galleryNewsItems' => $galleryNewsItems,
            'p2dd_info' => $p2dd_info
        ]);
    }

    public function searchNewsServices(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $menu = $this->getApiMenu();

        $judul = "";
        $count = 0;
        $count_news = 0;
        $count_service = 0;
        $searchNews = null;
        $searchServices = null;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;

        $p2dd_info = $this->getApiP2DDInfo();

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

                $searchNews = $this->homeRepo->searchNewsItems($judul, $offset, $limit);
                $searchServices = $this->homeRepo->searchServices($judul, $offset, $limit);
                $count_news = $this->homeRepo->getCountsearchNews($judul);
                $count_service =$this->homeRepo->getCountsearchServices($judul);
                $count = $count_news + $count_service;
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
                
                // if($searchNews != null){
                //     $count = count($searchNews);
                // }
            }
        }
        
        return view('home.searchPage', [
            'menus' => $menu,
            'count' => $count,
            'keyword' => $judul,
            'searchNews' => $searchNews,
            'searchServices' => $searchServices,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'title' => $judul,
            'p2dd_info' => $p2dd_info
        ]);
    }
    
}
