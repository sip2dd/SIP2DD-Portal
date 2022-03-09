<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Glossary\GlossaryInterface;
use App\Http\Traits\ApiContentsTrait;

class GlossaryController extends Controller
{
    use ApiContentsTrait;
    
    public function __construct(GlossaryInterface $glossaryRepo){
        $this->glossaryRepo = $glossaryRepo;
    }
    
    public function index()
    {
        $menus = $this->getApiMenu();
        $gloItems = $this->glossaryRepo->getGlossary();
        $p2dd_info = $this->getApiP2DDInfo();
        
        return view('glossary.glossaryPage',[
            'menus' => $menus,
            'gloItems' => $gloItems,
            'p2dd_info' => $p2dd_info
        ]);
    }
}
