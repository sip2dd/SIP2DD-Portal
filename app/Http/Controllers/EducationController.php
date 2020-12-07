<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Education\EducationInterface;
use Illuminate\Support\Facades\Validator;
use Share;

class EducationController extends Controller
{
    public function __construct(EducationInterface $eduRepo){
        $this->eduRepo = $eduRepo;
    }
    //
    public function index(Request $request)
    {
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

        $eduItems = $this->eduRepo->getEducation($offset, $limit);
        $count = $this->eduRepo->getCountEducation();;

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('education.educationPage', [
            'eduItems' => $eduItems,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
        ]);

    }

    public function detailEducation(Request $request)
    {
        $offset=null;
        $limit = 6;
        $detailEducation = null;
        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailEducation = $this->eduRepo->getEducationDetail($id);
                if($detailEducation != null){
                    $getSocmed = $this->getSocmed($detailEducation['judul']);
                }else{
                    $getSocmed = $this->getSocmed();
                }
                
            }else{
                return redirect('');
            }
        }else{
            return redirect('');
        }

        
        $edu = $this->eduRepo->getEducation($offset, $limit);
        
        return view('education.detailEducationPage', [
            'detailEducation' => $detailEducation, 
            'edu' => $edu, 
            'socmed' => $getSocmed    
        ],
        );

    }

    public function searchEducation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'integer'
        ]);

        $judul = "";
        $count = 0;
        $eduItems = null;
        $pages = 1;
        $offset = null;
        $limit = 6;
        $pagination = 1;

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
                $eduItems = $this->eduRepo->getSearchEducation($judul, $offset, $limit);
                $count = $this->eduRepo->getCountSearchEducation($judul);
                
                if($count > $limit){
                    $pagination = ceil($count / $limit);
                } 
            }
        }
        
        //dd($searchNews);

        return view('education.searchEducationPage', [
            'count' => $count,
            'keyword' => $judul,
            'eduItems' => $eduItems,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
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
