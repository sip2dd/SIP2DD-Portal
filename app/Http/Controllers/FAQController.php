<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FAQ\FaqInterface;

class FAQController extends Controller
{
    public function __construct(FaqInterface $faqRepo){
        $this->faqRepo = $faqRepo;
    }

    public function index()
    {
        //$menu = $this->getApiMenu();
        $menu = null;
        $faqItems = $this->faqRepo->getFAQ();
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;
        
        return view('faq.FAQPage', [
            'menus' => $menu,
            'faqItems' => $faqItems,
            'p2dd_info' => $p2dd_info
        ]);
    }
}
