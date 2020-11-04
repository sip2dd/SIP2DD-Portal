<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlossaryController extends Controller
{
    //
    public function index()
    {
        return view('glossary.glossaryPage');
    }
}
