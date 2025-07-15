<?php

include 'Vendor/autoload.php';

use Estoya\studentapp\Model\studentModel;

$student = new studentModel;
$student->id = 123456;
$student->fullname = "Estoya Jilwin P";
$student->yearlevel = "First Year";
$student->course = "BSIT";
$student->section = "1A";

$student->displayInfo();