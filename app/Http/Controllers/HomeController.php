<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Home\HomeInterface;
use App\Http\Traits\ApiContentsTrait;

class HomeController extends Controller
{
    use ApiContentsTrait;

    public function __construct(HomeInterface $homeRepo){
        $this->homeRepo = $homeRepo;
    }
    
    public function index()
    {
        $menu = $this->getApiMenu();
        // $menu = null;
        
        $newsItems = $this->homeRepo->getNewsItems();
        //dd($newsItems);
        $govServices = $this->homeRepo->getGovServices(); 

        $eduNewsItems = $this->homeRepo->getEducationNewsItems();
        $galleryNewsItems = $this->homeRepo->getGalleryNewsItems();
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;
        
        return view('home.homePage', [
            'menus' => $menu,
            'govServices' => $govServices,
            'newsItems' => $newsItems,
            'eduNewsItems' => $eduNewsItems,
            'galleryNewsItems' => $galleryNewsItems,
            'p2dd_info' => $p2dd_info
        ]);
    }

    public function searchNewsServices(Request $request)
    {
        $judul = "";
        $count = 0;
        $searchNews = null;
        if($request->has('keyword')) {
            if($request->keyword != ''){
                $judul = $request->keyword;
                $searchNews = $this->homeRepo->searchNewsItems($judul);
                
                $count = $this->homeRepo->getCountsearchNews($judul);
                
                
                // if($searchNews != null){
                //     $count = count($searchNews);
                // }
            }
        }
        
        return view('home.searchPage', [
            'count' => $count,
            'keyword' => $judul,
            'searchNews' => $searchNews,
        ]);
    }
    
}
