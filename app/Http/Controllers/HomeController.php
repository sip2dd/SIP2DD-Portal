<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Home\HomeInterface;

class HomeController extends Controller
{

    private $newsRepo;

    public function __construct(HomeInterface $homeRepo){
        $this->homeRepo = $homeRepo;
    }
    
    public function index()
    {
        // get menu : bisa pake traits mungkin ?

        $govServices = $this->homeRepo->getGovServices();    
        $newsItems = $this->homeRepo->getNewsItems();
        $eduNewsItems = $this->homeRepo->getEducationNewsItems();
        $galleryNewsItems = $this->homeRepo->getGalleryNewsItems();
        dd($galleryNewsItems);

        // return view('home.home', ['menus' => $menu]);
    }

    public function pencarian()
    {
        return view('home.pencarian');
    }
    
}
