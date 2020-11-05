<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Regulation\RegulationInterface;

class RegulationController extends Controller
{
    public function __construct(RegulationInterface $regRepo){
        $this->regRepo = $regRepo;
    }

    public function index()
    {
        //$menu = $this->getApiMenu();
        $menu = null;
        $regItems = $this->regRepo->getRegulation();
        // $p2dd_info = $this->getApiP2DDInfo();
        $p2dd_info = null;
        return view('regulation.regulationPage',  [
            'menus' => $menu,
            'regItems' => $regItems,
            'p2dd_info' => $p2dd_info
        ]);
    }

    public function getDetailRegulation(Request $request){
        
        $detailRegulation = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailRegulation = $this->regRepo->getDetailRegulation($id);
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }
        
        return view('news.detailNewsPage', [
            'detailNews' => $detailNews,    
        ],
        );
    }
}
