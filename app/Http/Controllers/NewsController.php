<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;
use BenSampo\Embed\Services\YouTube;
use BenSampo\Embed\Rules\EmbeddableUrl;
use App\Repositories\News\NewsInterface;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function __construct(NewsInterface $newsRepo){
        $this->newsRepo = $newsRepo;
    }

    public function index()
    {  
        $offset = null;
        $limit = 5;
        $limit_sidebar = 4;
        $menu = null;
        $highlights = $this->newsRepo->getHighlight($offset, $limit); 
        $govNews = $this->newsRepo->getNationalGovNews($offset, $limit_sidebar);
        $localgovNews = $this->newsRepo->getLocalGovNews($offset, $limit_sidebar);
        // $localgovNews = $this->newsRepo->getNationalGovNews($offset, $limit_sidebar);
        $galleryNews = $this->newsRepo->getGalleryVideos($offset, $limit);
        $p2dd_info = null;
        
        return view('news.newsPage', [
                        'highlights' => $highlights, 
                        'govNews' => $govNews,
                        'localgovNews' => $localgovNews,
                        'galleryNews' => $galleryNews
                        ]);
    }

    public function searchNews(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $judul = "";
        $count = 0;
        $searchNews = null;
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
                $searchNews = $this->newsRepo->searchNews($judul, $offset, $limit);
                $count = $this->newsRepo->getCountsearchNews($judul);
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }
        
        //dd($searchNews);
        return view('news.searchNewsPage', [
            'count' => $count,
            'keyword' => $judul,
            'searchNews' => $searchNews,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'title' => $judul
        ]);
    }

    public function getDetailNews(Request $request){
        

        $detailNews = null;
        $attachments = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailNews = $this->newsRepo->getDetailNews($id);
                $attachments  = $this->newsRepo->getDetailNewsAttachment($id);

                //dd($attachments);
                if($detailNews != null){
                    $getSocmed = $this->getSocmed($detailNews['judul']);
                }else{
                    $getSocmed = $this->getSocmed();
                }
                
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        $offset = null;
        $limit_sidebar = 3;
    
        $highlights = $this->newsRepo->getHighlight($offset, $limit_sidebar);
        $govNews = $this->newsRepo->getNationalGovNews($offset, $limit_sidebar);
        // $localgovNews = $this->newsRepo->getLocalGovNews();
        $localgovNews = $this->newsRepo->getNationalGovNews($offset, $limit_sidebar); 
        
        
        return view('news.detailNewsPage', [
            'detailNews' => $detailNews,
            'attachments' => $attachments, 
            'highlights' => $highlights, 
            'govNews' => $govNews,
            'localgovNews' => $localgovNews,
            'socmed' => $getSocmed    
        ],
        );
    }

    public function getHighlights(Request $request){
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

        $highlights = $this->newsRepo->getHighlight($offset, $limit);
        $count = $this->newsRepo->getCountHighlight();

      
        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('news.highlightNewsPage', [
            'highlights' => $highlights,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            ]);
    }

    public function getGovNews(Request $request){
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

        $govNews = $this->newsRepo->getNationalGovNews($offset, $limit);
        $count = $this->newsRepo->getCountNationalGovNews();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        return view('news.govNewsPage', [
            'govNews' => $govNews,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function getLocalGovNews(Request $request){
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

        $localgovNews = $this->newsRepo->getLocalGovNews($offset, $limit);

        // $localgovNews = $this->newsRepo->getNationalGovNews($offset, $limit);
        $count = $this->newsRepo->getCountNationalGovNews();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('news.localgovNewsPage', [
            'localgovNews' => $localgovNews,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);
    }

    public function getSocmed($title = ""){
        $socmed = Share::currentPage($title)
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->getRawLinks();
        return $socmed;
    }


}
