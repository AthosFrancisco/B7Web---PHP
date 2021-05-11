<?php

echo '<pre>';

print_r($_FILES);

$arquivo = $_FILES['arquivo'];

$tiposPermitidos = array('image/jpeg', 'image/png', 'image/jpg');

if(in_array($arquivo['type'], $tiposPermitidos))
{
    $nome = md5(time().rand(0, 1000).'.jpg');
    move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nome);

    echo 'Arquivo salvo com sucesso!';
}else{
    echo 'Arquivo não permitido!';
}