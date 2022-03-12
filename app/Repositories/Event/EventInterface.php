<?php

namespace App\Repositories\Event;

interface EventInterface{
    public function getEvent($offset, $limit);
    public function getEventNormatif($offset, $limit);
    public function getEventHighlight($offset, $limit);
    public function getDetailEvent($id);
    public function getDetailEventAttachment($id);
    public function getCountEvent();
    public function getCountEventNormatif();
    public function searchEvent($keyword, $offset, $limit);
    public function getCountsearchEvent($keyword);
}