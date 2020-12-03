<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FAQ\FaqInterface;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    public function __construct(FaqInterface $faqRepo){
        $this->faqRepo = $faqRepo;
    }

    public function index(Request $request)
    {
        $pages = 1;
        $offset = null;
        $pagination = 1;
        $limit = 3;

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
        $faqItems = $this->faqRepo->getFAQ($offset, $limit);
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;
        $count = 1;

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('faq.FAQPage', [
            'menus' => $menu,
            'faqItems' => $faqItems,
            'p2dd_info' => $p2dd_info,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }
}
