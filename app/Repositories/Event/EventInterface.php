<?php

namespace App\Repositories\Event;

interface EventInterface{
    public function getEvent($offset, $limit);
    public function getEventHighlight($offset, $limit);
    public function getDetailEvent($id);
    public function getCountEvent();
    public function searchEvent($keyword, $offset, $limit);
}