<?php

$dizimo = function(int $valor){
    return $valor * 0.1;
};

echo 'dizimo: '.$dizimo(100).'<br/>';

$oferta = $dizimo;

echo 'oferta: '.$oferta(80);