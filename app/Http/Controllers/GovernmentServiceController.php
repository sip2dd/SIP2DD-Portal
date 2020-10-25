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

    }

}
