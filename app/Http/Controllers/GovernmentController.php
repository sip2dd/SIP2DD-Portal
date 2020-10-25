<?php

namespace App\Http\Controllers;
use App\Repositories\Government\GovernmentInterface;

use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    public function __construct(GovernmentInterface $govRepo){
        $this->govRepo = $govRepo;
    }

    public function index()
    {
        $governments = $this->govRepo->getGoverment(); 
         return view('government.governmentPage', ['governments' => $governments]);
    }

    public function detailGov(Request $request)
    {
        // get detail pemda 
        $govDetail = null;
        $govNewsHighlights = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $govDetail = $this->govRepo->getGovermentDetail($id);
                $govNewsHighlights = $this->govRepo->getGovHighlight($id);
                $govNews = $this->govRepo->getGovNews($id); 
                $govServices = $this->govRepo->getGovServices($id);
                $galleryGovPhotos = $this->govRepo->getGalleryGovPhotos($id);   
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        return view('government.detailGovernmentPage', [
            'govDetail' => $govDetail, 
            'govNewsHighlights' => $govNewsHighlights,
            'govNews' => $govNews,
            'govServices' => $govServices,
            'galleryGovPhotos' => $galleryGovPhotos,
        ]);
    }

}
