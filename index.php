<?php

function somar($n1, $n2, &$total){
    $total = $n1+$n2;
}

$x = 5;
$y = 12;
$total;

$resultado = somar($x, $y, $total);

echo $x.' + '.$y.' = '.$total.'<br/>';

$lista = [3,2,1];

//função nativa do php com passagem de parâmetro por referência
sort($lista);

print_r($lista);