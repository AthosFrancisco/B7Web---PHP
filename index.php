<?php

$nome = 'Athos';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
