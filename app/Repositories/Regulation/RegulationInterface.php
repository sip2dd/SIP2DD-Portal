<?php

namespace App\Repositories\Regulation;

interface RegulationInterface{
    public function getRegulation($offset, $limit);
    public function getCountRegulation();
    public function getDetailRegulation($id);
    public function searchRegulation($tentang, $nomor, $tahun, $status, $offset, $limit);
    public function getCountSearchRegulation($tentang, $nomor, $tahun, $status);
}