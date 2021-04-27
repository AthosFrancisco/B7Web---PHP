<?php

$diaSemanaArray = [
    'Domingo',
    'Segunda-Feira',
    'Terça-Feira',
    'Quarta-Feira',
    'Quinta-Feira',
    'Sexta-Feira',
    'Sábado'
];

$data = '2021-10-05';
$dataInTime = strtotime($data);

$diaSemana = date('w', strtotime($dataInTime));

echo date('d/m/Y', $dataInTime).' - '.$diaSemanaArray[$diaSemana];