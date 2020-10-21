<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class HomeController extends Controller
{
    
    public function index()
    {
        $menu = $this->getAPI();

        dd($menu);
        
        $menu = null;
        return view('home.home', ['menus' => $menu]);
    }

    public function pencarian()
    {
        return view('home.pencarian');
    }
    
    public function getAPI()
    {
        $client = new Client();
        try{
            $url = config('urlapi.url_api') . '1527.json';
            $request = $client->get($url);
            $response = $request->getBody()->getContents();
            $data = json_decode($response, true);    
        }catch (RequestException $e){
            $data = null;
        }catch (ConnectException $e) {
            $data = null;
        }

        return $data;
    }

    public function getSearchAPI()
    {
        $client = new Client();
        try{
            $url = config('urlapi.url_api') . '1530.json';
            $request = $client->get($url);
            $response = $request->getBody()->getContents();
            $data = json_decode($response, true);    
        }catch (RequestException $e){
            $data = null;
        }catch (ConnectException $e) {
            $data = null;
        }

        return $data;
    }

    


}
