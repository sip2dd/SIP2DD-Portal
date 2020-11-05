<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Event\EventInterface;

class EventController extends Controller
{
    public function __construct(EventInterface $eventRepo){
        $this->eventRepo = $eventRepo;
    }

    public function index()
    {
        //$menu = $this->getApiMenu();
        $menu = null;
        $eventItems = $this->eventRepo->getEvent();
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;

        return view('event.eventPage', [
            'menus' => $menu,
            'eventItems' => $eventItems,
            'p2dd_info' => $p2dd_info
        ]);
    }

}
