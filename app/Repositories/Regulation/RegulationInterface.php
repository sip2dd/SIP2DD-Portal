<?php

namespace App\Repositories\Regulation;

interface RegulationInterface{
    public function getRegulation();
    public function getDetailRegulation($id);
    public function searchRegulation($tentang, $nomor, $tahun, $offset, $limit);
}