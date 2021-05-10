<?php

$texto = file_get_contents("text.txt");

echo $texto;

$novoTexto = $texto."\nAthos Francisco";

file_put_contents("text.txt", $novoTexto);

$texto = explode("\n", $texto);


echo '<br><br>LINHAS: '.count($texto);

