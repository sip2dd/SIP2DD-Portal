<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
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

        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1527.json');
            $response = $request->getBody()->getContents();
    
            $highlight = json_decode($response, true);
            
            
        }catch (RequestException $e){
            $highlight = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1529.json');
            $response = $request->getBody()->getContents();
    
            $berita_satgas = json_decode($response, true);
            
        }catch (RequestException $e){
            $berita_satgas = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1530.json');
            $response = $request->getBody()->getContents();
    
            $berita_nasional = json_decode($response, true);
            
        }catch (RequestException $e){
            $berita_nasional = null;
        }

        //dd($highlight);

        return view('news.berita');
     
    }

    public function pencarianBerita()
    {
        return view('news.pencarianberita');
    }

    public function beritaDaerah()
    {
        return view('news.beritadaerah');
    }

    public function beritaSatgas()
    {
        return view('news.beritasatgas');
    }

    public function detailBerita()
    {
        return view('news.detailberita');
    }

    public function galeri()
    {
        return view('news.galeriberita');
    }

    public function detailGaleri()
    {
        return view('news.galeriberitadetail');
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
        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/aapi/TemplateData/keluaran/1527.json');
            $response = $request->getBody()->getContents();
    
            $menu = json_decode($response, true);
            dd($menu);
        }catch (RequestException $e){
            
        }
        
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
