<?php

$ingredientes = [
    'farinha',
    'ovo',
    'açúcar'
];

$bolo2 = [
    'chocolate',
    ...$ingredientes,
    'leite'
];

print_r($bolo2);