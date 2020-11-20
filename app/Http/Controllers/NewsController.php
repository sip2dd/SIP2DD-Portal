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
        $menu = null;
        $highlights = $this->newsRepo->getHighlight(); 
        $govNews = $this->newsRepo->getNationalGovNews();
        // $localgovNews = $this->newsRepo->getLocalGovNews();
        $localgovNews = $this->newsRepo->getNationalGovNews();
        $galleryNews = $this->newsRepo->getGalleryVideos();
        $p2dd_info = null;

        //dd($galleryNews);
        
        return view('news.newsPage', [
                        'highlights' => $highlights, 
                        'govNews' => $govNews,
                        'localgovNews' => $localgovNews,
                        'galleryNews' => $galleryNews
                        ]);
    }

    public function searchNews(Request $request)
    {
        $judul = "";
        $count = 0;
        $searchNews = null;
        if($request->has('keyword')) {
            if($request->keyword != ''){
                $judul = $request->keyword;
                $searchNews = $this->newsRepo->searchNews($judul);
                if($searchNews != null){
                    $count = count($searchNews);
                }
            }
        }
        
        //dd($searchNews);
        return view('news.searchNewsPage', [
            'count' => $count,
            'keyword' => $judul,
            'searchNews' => $searchNews,
        ]);
    }

    public function getDetailNews(Request $request){
        

        $detailNews = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailNews = $this->newsRepo->getDetailNews($id);
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

        
        $highlights = $this->newsRepo->getHighlight();
        $govNews = $this->newsRepo->getNationalGovNews();
        // $localgovNews = $this->newsRepo->getLocalGovNews();
        $localgovNews = $this->newsRepo->getNationalGovNews(); 
        
        
        return view('news.detailNewsPage', [
            'detailNews' => $detailNews, 
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

    public function getGovNews(){
        $govNews = $this->newsRepo->getNationalGovNews();
        return view('news.govNewsPage', ['govNews' => $govNews]);
    }

    public function getLocalGovNews(){
        // $localgovNews = $this->newsRepo->getLocalGovNews();
        $localgovNews = $this->newsRepo->getNationalGovNews();
        return view('news.localgovNewsPage', ['localgovNews' => $localgovNews]);
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
