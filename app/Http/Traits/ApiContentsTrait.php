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
            // $url = config('url.base_api') . $url;
            //$url = "http://103.18.117.44/sicantik-wsa/api/TemplateData/keluaran/1527.json";
//            $url = "https://p2dd.go.id/backend/api/TemplateData/keluaran/" . $url;
	    $url = "https://kelola.p2dd.go.id/p2dd/api/TemplateData/keluaran/" . $url;
            //$request = $client->get($url);
            $request = $client->request('GET', $url,['timeout' => 5, 'connect_timeout' => 5, 'verify' => false]);
            $response = $request->getBody()->getContents();
            $data = json_decode($response, true);    
        }catch (ConnectException $e) {
            //$data = "connect";
            $data = $e;
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
//        dd($data);
        return $data;
    }

    public function getApiMenu(){
        $menus = $this->getApiContents('1612.json');
        $menu_child = null;
        if($menus != null){
            $menus = $menus['data']['menu'];
            foreach($menus as $index => $menu){
                
                    $menu_child[$index] = $menu;
                    $child = $this->getApiContents('1610.json?parent_id='.$menu['id']);
                    if($child != null){
                        $child = $child['data']['menu_child'];
                        $menu_child[$index]['menu_child'] = $child;
            
                        // if(count($child['data']['menu_child']) < 1){
                        //     $child = null;
                        // }
                    }

                    
            }
        }

        return $menu_child;
    }

    public function getApiP2DDInfo(){
        $p2dd_info = $this->getApiContents('1543.json');
        if($p2dd_info != null){
            $p2dd_info = $p2dd_info['data']['p2dd_info'][0];
        }
        return $p2dd_info;
    }
}
