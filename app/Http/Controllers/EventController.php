<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Event\EventInterface;
use Share;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ApiContentsTrait;

class EventController extends Controller
{
    use ApiContentsTrait;

    public function __construct(EventInterface $eventRepo){
        $this->eventRepo = $eventRepo;
    }

    public function index()
    {
        $offset=null;
        $limit = 6;
        $limit_highlight = 1;
        
        //$menu = $this->getApiMenu();
        $menu = null;
        $highlightevent = $this->eventRepo->getEventHighlight($offset, $limit_highlight); 
        $eventItems = $this->eventRepo->getEvent($offset, $limit);
        $p2dd_info =$this->getApiP2DDInfo();

        return view('event.dashboardEventPage', [
            'menus' => $menu,
            'highlightevent' => $highlightevent,
            'eventItems' => $eventItems,
            'p2dd_info' => $p2dd_info,
            
        ]);
    }

    public function allEvent(Request $request)
    {
        $offset=null;
        $limit = 6;
        $pagination = 1;
        $pages = 1;

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
        $eventItems = $this->eventRepo->getEvent($offset, $limit);
        $p2dd_info =$this->getApiP2DDInfo();

        $count = $this->eventRepo->getCountEvent();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('event.eventPage', [
            'menus' => $menu,
            'eventItems' => $eventItems,
            'p2dd_info' => $p2dd_info,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'count' => $count
        ]);
    }

    public function getDetailEvent(Request $request)
    {
        $offset=null;
        $limit = 6;
        $detailEvent = null;
        $p2dd_info =$this->getApiP2DDInfo();
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailEvent = $this->eventRepo->getDetailEvent($id);
                if($detailEvent != null){
                    $getSocmed = $this->getSocmed($detailEvent['judul']);
                }else{
                    $getSocmed = $this->getSocmed();
                }
                
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        
        $events = $this->eventRepo->getEvent($offset, $limit);
        
        return view('event.detailEventPage', [
            'detailEvent' => $detailEvent, 
            'events' => $events, 
            'p2dd_info' => $p2dd_info,
            'socmed' => $getSocmed    
        ],
        );
    }

    public function searchEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $judul = "";
        $count = 0;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;
        $eventItems = null;
        $p2dd_info =$this->getApiP2DDInfo();
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
                $eventItems = $this->eventRepo->searchEvent($judul, $offset, $limit);
                $count = $this->eventRepo->getCountsearchEvent($judul);
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }
        
        return view('event.searchEventPage', [
            'count' => $count,
            'keyword' => $judul,
            'eventItems' => $eventItems,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'p2dd_info' => $p2dd_info,
            'title' => $judul
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
