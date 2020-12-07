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
        $limit = 10;

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
        $count = $this->faqRepo->getCountFAQ();

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

    public function searchFAQ(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $menu = null;
        $p2dd_info = null;
        $judul = "";
        $count = 0;
        $faqItems = null;
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
                        $offset = ($pages - 1) * $limit; 
                    } 
                }else{
                    $pages = 1;
                }
                $faqItems = $this->faqRepo->getSearchFAQ($judul, $offset, $limit);
                $count = $this->faqRepo->getCountSearchFAQ($judul);
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }
        
        //dd($searchNews);

        return view('faq.searchFAQPage', [
            'menus' => $menu,
            'faqItems' => $faqItems,
            'p2dd_info' => $p2dd_info,
            'count' => $count,
            'keyword' => $judul,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'title' => $judul
        ]);
    }

    
}
