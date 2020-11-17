<?php

namespace App\Repositories\Event;

interface EventInterface{
    public function getEvent();
    public function getAllEvent();
    public function getDetailEvent($id);
}