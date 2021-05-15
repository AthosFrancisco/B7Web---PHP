<?php
require 'vendor/autoload.php';

use classes\Calculadora;

$calc = new Calculadora();
$calc->add(10);
$calc->divide(5);
$calc->sub(3);
$calc->multiply(3);
$calc->add(20);
$calc->sub(30);

echo $calc->getValor();