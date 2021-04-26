<?php

function somar(int $n1, int $n2 = 0, int $n3 = 0){
    return $n1+$n2+$n3;
}

$resultado = somar(3, 4);

echo $resultado;
