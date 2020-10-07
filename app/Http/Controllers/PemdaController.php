<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemdaController extends Controller
{
    //
    public function index()
    {
         return view('pemda.pemda');
    }
}
