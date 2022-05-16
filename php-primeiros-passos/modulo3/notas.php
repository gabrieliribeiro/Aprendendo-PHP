<?php

$notas = [
    [
        'aluno' => 'Maria',
        'notas' =>  '10',
    ],
    [
        'aluno' => 'Gabrieli',
        'notas' =>  '6',
    ],
    [
        'aluno' => 'Raul',
        'notas' => '8',
    ],
];

function ordenaNotas(array $notas1, array $notas2): int
{
    return $notas2['notas'] <=> $notas1['notas'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);