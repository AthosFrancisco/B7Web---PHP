<?php

$index = filter_input(INPUT_GET, "index");

$arquivo = file_get_contents("text.txt");
$arquivo = explode(",", $arquivo);

array_splice($arquivo, $index, 1);

$arquivo = implode(",", $arquivo);

file_put_contents("text.txt", $arquivo);

header("Location: index.php");
exit;