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

    public function detailPemda()
    {
        // get detail pemda 

        // get berita terbaru(highlight) pemda

        // get berita lainnya 

        // get layanan terhangat

        // get galeri foto

        
        return view('pemda.detailpemda');
    }
}
