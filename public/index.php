<?php

require '../vendor/autoload.php';
use Vduqu\App\Hello;

$test = new Hello();
var_dump($test->talk());
