<?php 

namespace App\Repositories\Education;

interface EducationInterface{
    public function getEducationDetail($id);
    public function getDetailEducationAttachment($id);
    public function getEducation($offset, $limit);
    public function getSearchEducation($keyword, $offset, $limit);
    public function getCountSearchEducation($keyword);
    public function getCountEducation();
}