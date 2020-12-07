<?php

namespace App\Repositories\FAQ;

interface FaqInterface{
    public function getFAQ($offset, $limit);
    public function getCountFAQ();
    public function getSearchFAQ($keyword, $offset, $limit);
    public function getCountSearchFAQ($keyword);
}