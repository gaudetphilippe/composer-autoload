<?php

require_once '../src/Wcs/Hello.php';
require_once  '../vendor/autoload.php';

$sentence = new \App\Hello();

$sentence->talk();

echo $sentence->talk();
