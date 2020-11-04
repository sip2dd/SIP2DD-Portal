<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index()
    {
        return view('education.educationPage');
    }

    public function detailEducation()
    {
        return view('education.detailEducationPage');
    }

    
}
