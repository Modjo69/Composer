<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

echo SayHello::world();



$message = new Hello();
echo $message->talk();
