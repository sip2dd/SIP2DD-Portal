<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Education\EducationInterface;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ApiContentsTrait;
use Share;

class EducationController extends Controller
{
    use ApiContentsTrait;

    public function __construct(EducationInterface $eduRepo){
        $this->eduRepo = $eduRepo;
    }

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
        $count = $this->eduRepo->getCountEducation();
        $p2dd_info =$this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($count > $limit){
            $pagination = ceil($count / $limit);
        } 
        
        return view('education.educationPage', [
            'eduItems' => $eduItems,
            'count' => $count,
            'page' => $pages ?? 1,
            'pagination' => $pagination,
            'menus' => $menus,
            'p2dd_info' => $p2dd_info,
        ]);

    }

    public function detailEducation(Request $request)
    {
        $offset=null;
        $limit = 6;
        $detailEducation = null;
        $attachments = null;
        $p2dd_info =$this->getApiP2DDInfo();
        $menus = $this->getApiMenu();

        if($request->has('id')) {
            if($request->id != ''){
                $id = $request->id;
                $detailEducation = $this->eduRepo->getEducationDetail($id);
                $attachments = $this->eduRepo->getDetailEducationAttachment($id);
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
            'p2dd_info' => $p2dd_info,
            'menus' => $menus,
            'attachments' => $attachments,
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
