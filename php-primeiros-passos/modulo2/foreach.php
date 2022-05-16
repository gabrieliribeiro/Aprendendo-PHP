<?php

$contasCorrestes =[
    '123.456.789-10' => [
        'titular' => 'GABRIELI',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'RAUL',
        'saldo' => 2000
    ],
    '123.256.789-12' => [
        'titular' => 'ANDREZA',
        'saldo' => 3000
    ]
];

$contasCorrestes['123.247.789-12'] = [
    'titular' => 'BRUNA',
    'saldo' => 1000
];

foreach ($contasCorrestes as $cpf => $conta){
    echo $cpf. " ". $conta['titular'] . PHP_EOL;
}