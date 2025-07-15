<?php

namespace Estoya\Studentapp\Model;
use Estoya\studentModel\Core\Crud;

class studentModel implements Crud {


    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

public function __construct()
{
    $this->id = "";
    $this->fullname = "";
    $this->yearlevel = "";
    $this->course = "";
    $this->section = "";
}
}