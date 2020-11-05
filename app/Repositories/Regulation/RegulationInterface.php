<?php

namespace App\Repositories\Regulation;

interface RegulationInterface{
    public function getRegulation();
    public function getDetailRegulation($id);
}