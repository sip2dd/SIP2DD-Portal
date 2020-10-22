<?php

namespace App\Http\Traits;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\TransferException;

trait ApiContentsTrait{

    public function getApiContents(String $url = ""){
        $client = new Client();
        try{
            $url = config('url.base_api') . $url;
            //$url = "http://103.18.117.44/sicantik-ws/api/TemplateData/keluaran/1527.json";
            //$request = $client->get($url);
            $request = $client->request('GET', $url,['timeout' => 5, 'connect_timeout' => 5]);
            $response = $request->getBody()->getContents();
            $data = json_decode($response, true);    
        }catch (ConnectException $e) {
            //$data = "connect";
            $data = null;
        }catch (RequestException $e){
            //$data = "request";
            $data = null;
        }catch (TransferException $e){
            //$data = "transfer";
            $data = null;
        }catch(GuzzleHttp\Exception\GuzzleException $e) {
            //$data = "guzzle";
            $data = null;
        }

        return $data;
    }
}