<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desodernadas" . PHP_EOL;
var_dump($notas);

echo "Ordenadas" . PHP_EOL;
var_dump($notasOrdenadas);