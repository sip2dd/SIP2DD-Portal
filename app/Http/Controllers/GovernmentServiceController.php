<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GovServices\GovServicesInterface;

class GovernmentServiceController extends Controller
{
    public function __construct(GovServicesInterface $govService){
        $this->govService = $govService;
    }

    public function index(){
        $govServices = $this->govService->getGovServices();   
        return view('govService.govServicePage', ['govServices' => $govServices]);
    }

    public function detailServiceGov(Request $request){
        $detailGovServices = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailGovServices = $this->govService->getDetailService($id);  
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }
        
        return view('govService.detailGovServicePage', [
            'detailGovServices' => $detailGovServices 
        ],
        );
    }

}
