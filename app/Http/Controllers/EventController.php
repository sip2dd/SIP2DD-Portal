<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Event\EventInterface;
use Share;

class EventController extends Controller
{
    public function __construct(EventInterface $eventRepo){
        $this->eventRepo = $eventRepo;
    }

    public function index()
    {
        $offset=null;
        $limit = 6;
        //$menu = $this->getApiMenu();
        $menu = null;
        $highlightevent = $this->eventRepo->getEvent($offset, 1); 
        $eventItems = $this->eventRepo->getEvent($offset, $limit);
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;

        return view('event.dashboardEventPage', [
            'menus' => $menu,
            'highlightevent' => $highlightevent,
            'eventItems' => $eventItems,
            'p2dd_info' => $p2dd_info
        ]);
    }

    public function allEvent()
    {
        $offset=null;
        $limit = 6;
        //$menu = $this->getApiMenu();
        $menu = null;
        $eventItems = $this->eventRepo->getEvent($offset, $limit);
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;

        return view('event.eventPage', [
            'menus' => $menu,
            'eventItems' => $eventItems,
            'p2dd_info' => $p2dd_info
        ]);
    }

    public function getDetailEvent(Request $request)
    {
        $offset=null;
        $limit = 6;
        $detailEvent = null;
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
            'socmed' => $getSocmed    
        ],
        );
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
