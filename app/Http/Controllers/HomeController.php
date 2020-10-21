<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Http\Traits\ContentsTrait;

class HomeController extends Controller
{
    use ContentsTrait;
    
    public function index()
    {
        $trait = $this->getContents("1527.json");
        dd($trait);
        
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

}
