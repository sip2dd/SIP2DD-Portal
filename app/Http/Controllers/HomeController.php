<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
     	$client = new Client();
     	$request = $client->get('http://localhost:8000/api/v1/menu');
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
     
    }

    public function highlight()
    {
        $client = new Client();
     	$request = $client->get('http://localhost:8000/api/v1/highlight');
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
    }

    public function pojaknas()
    {
    	$client = new Client();
     	$request = $client->get('http://localhost:8000/api/v1/pojaknas');
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
        
    }

    public function layanan()
    {
    	$client = new Client();
     	$request = $client->get('http://localhost:8000/api/v1/layanan');
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
       
    }

    public function galeri()
    {
      	$client = new Client();
     	$request = $client->get('http://localhost:8000/api/v1/galeri');
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
    }

    public function event()
    {
    	$client = new Client();
     	$request = $client->get('http://localhost:8000/api/v1/event');
     	$response = $request->getBody()->getContents();

     	$menu = json_decode($response, true);

     	print("<pre>".print_r($menu, true)."</pre>");
       
    }

    public function pencarian(Request $request)
    {
         $form_search = [
            'search' => $request->search,
            'category' => $request->category,
        ];

        return $form_search;
    }


}
