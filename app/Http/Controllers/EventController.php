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
        $video = null;
        $attachments = null;
       
        $highlightevent = $this->eventRepo->getEventHighlight($offset, $limit_highlight);
        $attachments = $highlightevent ? $this->eventRepo->getDetailEventAttachment($highlightevent[0]['kegiatan_id']):null;
        $eventItems = $this->eventRepo->getEvent($offset, $limit);
        $eventItemsNormatif = $this->eventRepo->getEventNormatif($offset, $limit);
        $p2dd_info =$this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($attachments != null){
            foreach($attachments as $att){
                if($att['tipe'] == "Video"){
                    if($att['link'] != null){
                        $video = $att['link'];    
                    }
                    // else if($att['file'] != null){
                    //     $video = $att['file']; 
                    // }
                    break;
                }
            }
        }
        
        return view('event.dashboardEventPage', [
            'menus' => $menus,
            'highlightevent' => $highlightevent,
            'video' => $video,
            'eventItems' => $eventItems,
            'eventItemsNormatif' => $eventItemsNormatif,
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
        $eventItems = $this->eventRepo->getEvent($offset, $limit);
        $p2dd_info =$this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        $count = $this->eventRepo->getCountEvent();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('event.eventPage', [
            'menus' => $menus,
            'eventItems' => $eventItems,
            'p2dd_info' => $p2dd_info,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'count' => $count
        ]);
    }

    public function allEventNormatif(Request $request)
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
        $eventItems = $this->eventRepo->getEventNormatif($offset, $limit);
        $p2dd_info =$this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        $count = $this->eventRepo->getCountEventNormatif();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 

        return view('event.eventNormatifPage', [
            'menus' => $menus,
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
        $attachments = null;
        $p2dd_info =$this->getApiP2DDInfo();
        $menus = $this->getApiMenu();
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailEvent = $this->eventRepo->getDetailEvent($id);
                $attachments = $this->eventRepo->getDetailEventAttachment($id);
                
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
            'menus' => $menus,
            'attachments' => $attachments, 
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
        $menus = $this->getApiMenu();
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
            'menus' => $menus,
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
