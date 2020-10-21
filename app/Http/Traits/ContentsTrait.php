<?php

namespace App\Http\Traits;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

trait ContentsTrait{

    public function getContents(String $url){
        $client = new Client();
        try{
            $url = config('url.base_api') . $url;
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