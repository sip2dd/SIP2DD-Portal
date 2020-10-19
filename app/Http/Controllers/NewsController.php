<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use Share;

use BenSampo\Embed\Services\Vimeo;
use BenSampo\Embed\Services\YouTube;
use BenSampo\Embed\Rules\EmbeddableUrl;
use GuzzleHttp\Promise;


class NewsController extends Controller
{

    public function index()
    {
        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1527.json');
            $response = $request->getBody()->getContents();
    
            $highlight = json_decode($response, true);
            $highlight_c = $highlight['data']['highlight'];
            
            
        }catch (RequestException $e){
            $highlight_c = null;
        }catch (ConnectException $e) {
            $highlight_c = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1529.json');
            $response = $request->getBody()->getContents();
    
            $berita_satgas = json_decode($response, true);
            $berita_satgas_c = $berita_satgas['data']['berita'];
            
        }catch (RequestException $e){
            $berita_satgas_c = null;
        }catch (ConnectException $e) {
            $berita_satgas_c = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1530.json');
            $response = $request->getBody()->getContents();
    
            $berita_daerah = json_decode($response, true);
            $berita_daerah_c = $berita_daerah['data']['berita'];
            
        }catch (RequestException $e){
            $berita_daerah_c = null;
        }catch (ConnectException $e) {
            $berita_daerah_c = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/sicantik-ws/api/TemplateData/keluaran/1523.json');
            $response = $request->getBody()->getContents();
    
            $galeri = json_decode($response, true);
            $galeri_c = $galeri['data']['galeri_video'];
            
        }catch (RequestException $e){
            $galeri_c = null;
        }catch (ConnectException $e) {
            $galeri_c = null;
        }

        //dd($highlight);

        return view('news.berita', [
                        'highlights' => $highlight_c, 
                        'berita_satgases' => $berita_satgas_c,
                        'berita_daerahes' => $berita_daerah_c,
                        'galeris' => $galeri_c
                        ]);
     
    }

    public function pencarianBerita(Request $request)
    {
    //      $form_search = [
    //         'search' => $request->search,
    //         'category' => $request->category,
    //     ];
        $search = $request->cari != null ? $request->cari : null;

        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/sicantik-ws/api/TemplateData/keluaran/1532.json?judul='.$search.'&kata_kunci='.$search);
            $response = $request->getBody()->getContents();
            
    
            $pencarian = json_decode($response, true);
            //dd($pencarian);
            $pencarian_c = $pencarian['data']['berita_search'];
            
            
        }catch (RequestException $e){
            $highlight_c = null;
        }catch (ConnectException $e) {
            $highlight_c = null;
        }
        
        return view('news.pencarianberita', ['cari' => $search, 'pencarian' => $pencarian_c]);
    }

    public function highlight()
    {
        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1527.json');
            $response = $request->getBody()->getContents();
    
            $highlight = json_decode($response, true);
            $highlight_c = $highlight['data']['highlight'];
            
            
        }catch (RequestException $e){
            $highlight_c = null;
        }catch (ConnectException $e) {
            $highlight_c = null;
        }

        return view('news.highlightberita', ['highlights' => $highlight_c]);
    }

    public function beritaDaerah()
    {
        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1530.json');
            $response = $request->getBody()->getContents();
    
            $berita_daerah = json_decode($response, true);
            $berita_daerah_c = $berita_daerah['data']['berita'];
            
        }catch (RequestException $e){
            $berita_daerah_c = null;
        }catch (ConnectException $e) {
            $berita_daerah_c = null;
        }

        return view('news.beritadaerah', ['berita_daerahs' => $berita_daerah_c]);
    }

    public function beritaSatgas()
    {
        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1529.json');
            $response = $request->getBody()->getContents();
    
            $berita_satgas = json_decode($response, true);
            $berita_satgas_c = $berita_satgas['data']['berita'];
            
        }catch (RequestException $e){
            $berita_satgas_c = null;
        }catch (ConnectException $e) {
            $berita_satgas_c = null;
        }

        return view('news.beritasatgas', ['berita_satgases' => $berita_satgas_c]);
    }

    public function detailBerita(Request $request)
    {
        $search = $request->id;

        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/sicantik-ws/api/TemplateData/keluaran/1528.json?berita_id='.$search);
            $response = $request->getBody()->getContents();
    
            $detail = json_decode($response, true);

            $detail_berita = $detail['data']['berita_detail'][0]; 
            
        }catch (RequestException $e){
            $detail_berita = null;
        }catch (ConnectException $e) {
            $detail_berita = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1527.json');
            $response = $request->getBody()->getContents();
    
            $highlight = json_decode($response, true);
            $highlight_c = $highlight['data']['highlight'];
            
            
        }catch (RequestException $e){
            $highlight_c = null;
        }catch (ConnectException $e) {
            $highlight_c = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1529.json');
            $response = $request->getBody()->getContents();
    
            $berita_satgas = json_decode($response, true);
            $berita_satgas_c = $berita_satgas['data']['berita'];
            
        }catch (RequestException $e){
            $berita_satgas_c = null;
        }catch (ConnectException $e) {
            $berita_satgas_c = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1530.json');
            $response = $request->getBody()->getContents();
    
            $berita_daerah = json_decode($response, true);
            $berita_daerah_c = $berita_daerah['data']['berita'];
            
        }catch (RequestException $e){
            $berita_daerah_c = null;
        }catch (ConnectException $e) {
            $berita_daerah_c = null;
        }

        if($detail_berita != null){
            $getSocmed = Share::currentPage( $detail_berita['judul'])
                        ->facebook()
                        ->twitter()
                        ->whatsapp()
                        ->getRawLinks();
        }else{
            $getSocmed = Share::currentPage()
                        ->facebook()
                        ->twitter()
                        ->whatsapp()
                        ->getRawLinks();
        }

        

        //dd($getSocmed['facebook']);

        return view('news.detailberita', ['detail_berita' => $detail_berita, 
                                            'highlights' => $highlight_c, 
                                            'berita_satgases' => $berita_satgas_c,
                                            'berita_daerahes' => $berita_daerah_c,
                                            'socmed' => $getSocmed    
                                            ],
                                        );
    }

    public function galeri()
    {
        $client = new Client();
        try{
            $request = $client->get('http://103.18.117.44/sicantik-ws/api/TemplateData/keluaran/1523.json');
            $response = $request->getBody()->getContents();
    
            $galeri = json_decode($response, true);
            $galeri_c = $galeri['data']['galeri'];
            
        }catch (RequestException $e){
            $galeri_c = null;
        }catch (ConnectException $e) {
            $galeri_c = null;
        }

        return view('news.galeriberita', ['galeris' => $galeri_c]);

    }

    public function detailGaleri(Request $request)
    {
        $search = $request->id;
        $client = new Client();

        try{
            $request = $client->get('http://103.18.117.44/sicantik-ws/api/TemplateData/keluaran/1523.json');
            $response = $request->getBody()->getContents();
    
            $galeri = json_decode($response, true);
            $galeri_c = $galeri['data']['galeri'];
            
        }catch (RequestException $e){
            $galeri_c = null;
        }catch (ConnectException $e) {
            $galeri_c = null;
        }

        try{
            $request = $client->get('http://103.18.117.44/api-sicantik-ws/api/TemplateData/keluaran/1528.json');
            $response = $request->getBody()->getContents();
    
            $detail = json_decode($response, true);
            
            $detail_galeri = $detail['data']['berita'][0];
         
            
        }catch (RequestException $e){
            $detail_galeri = null;
        }catch (ConnectException $e) {
            $detail_galeri = null;
        }

        if($detail_galeri != null){
            $getSocmed = Share::currentPage( $detail_galeri['judul'])
                            ->facebook()
                            ->twitter()
                            ->whatsapp()
                            ->getRawLinks();
        }else{
            $getSocmed = Share::currentPage()
            ->facebook()
            ->twitter()
            ->whatsapp()
            ->getRawLinks();
        }

        //$linkVideo = "https://www.youtube.com/watch?v=oHg5SJYRHA0";

        // $linkVideo = "https://www.w3schools.com/html/movie.mp4";

        $linkVideo = "https://20.detik.com/embed/201016053";
        
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $linkVideo, $match);

        if (array_key_exists(1, $match)) {
            $type = "youtube";
        }else{
            $type = "not youtube";
        }

        return view('news.galeriberitadetail', ['galeris' => $galeri_c, 'detail_galeri' => $detail_galeri, 'socmed' => $getSocmed, 'video' => $linkVideo, 'type' => $type]);
    }

}
