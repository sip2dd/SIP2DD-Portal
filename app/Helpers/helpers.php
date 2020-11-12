<?php

    function getYouTubeVideoId($pageVideUrl) {
        $link = $pageVideUrl;
        $video_id = explode("?v=", $link);
        if (!isset($video_id[1])) {
            $video_id = explode("youtu.be/", $link);
        }
        $youtubeID = $video_id[1];
        if (empty($video_id[1])) $video_id = explode("/v/", $link);
        $video_id = explode("&", $video_id[1]);
        $youtubeVideoID = $video_id[0];
        if ($youtubeVideoID) {
            return $youtubeVideoID;
        } else {
            return false;
        }
    }

    function tanggal_indonesia($tgl, $tampil_hari=true) {	
        $nama_hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");	
        $nama_bulan = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");	
        $tahun = substr($tgl,0,4);
        $bulan = $nama_bulan[(int)substr($tgl,5,2)];
        $tanggal = substr($tgl,8,2);	
        $text = "";	
        if($tampil_hari){
            $urutan_hari = date('w', mktime(0,0,0, substr($tgl,5,2),        
            $tanggal, $tahun));
            $hari = $nama_hari[$urutan_hari];
            $text .= $hari.", ";	
        }	
        $text .=$tanggal ." ". $bulan ." ". $tahun;	
        return $text;
    }