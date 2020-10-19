<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeriFoto()
    {
        return view('news.galerifoto');
    }

    public function detailGaleriFoto(Request $request)
    {
        return view('news.detailgalerifoto');
    }

    public function galerivideo()
    {
        return view('news.galerivideo');
    }

    public function detailGaleriVideo(Request $request)
    {
        return view('news.detailgalerivideo');
    }
}
