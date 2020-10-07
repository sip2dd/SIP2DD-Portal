<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsController extends Controller
{
    //
    public function index()
    {
     	// $client = new Client();
     	// $request = $client->get('http://localhost:8000/api/v1/berita');
     	// $response = $request->getBody()->getContents();

     	// $menu = json_decode($response, true);

         // print("<pre>".print_r($menu, true)."</pre>");
         return view('news.berita');
     
    }

    public function pencarianBerita()
    {
        return view('news.pencarianberita');
    }

    public function kategori()
    {
     	$client = new Client();
     	$id = "highlightdetail Testing";
     	$request = $client->get('http://localhost:8000/api/v1/berita/kategori?id='.$id);
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
     
    }

    // public function pencarianBerita(Request $request)
    // {
    //      $form_search = [
    //         'search' => $request->search,
    //         'category' => $request->category,
    //     ];

    //     return $form_search;
    // }

    public function beritaDetail()
    {
        $id = "beritaDetail Testing";
        $client = new Client();
        $request = $client->get('http://localhost:8000/api/v1/beritadetail?id='.$id);

        $response = $request->getBody()->getContents();

        $menu = json_decode($response, true);

        print("<pre>".print_r($menu, true)."</pre>");
    }

    public function beritajson()
    {
        $client = new Client();
        $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1527.json');
        $response = $request->getBody()->getContents();

        $menu = json_decode($response, true);

        print("<pre>".print_r($menu, true)."</pre>");
     
    }

    public function kategorijson()
    {
        $client = new Client();
        $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1526.json');
        $response = $request->getBody()->getContents();

        $menu = json_decode($response, true);

        print("<pre>".print_r($menu, true)."</pre>");
     
    }
}
