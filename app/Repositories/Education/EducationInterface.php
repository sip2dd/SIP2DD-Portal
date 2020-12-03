<?php 

namespace App\Repositories\Education;

interface EducationInterface{
    public function getEducationDetail($id);
    public function getEducation($offset, $limit);
}