<?php

$conta1 = [
    'titular' => 'GABRIELI',
    'saldo' => 2000
];

$conta2 = [
    'titular' => 'RAUL',
    'saldo' => 4000
];

$conta3 = [
    'titular' => 'ANDREZA',
    'saldo' => 5000
];

$contasCorrentes=[$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular']. PHP_EOL;
}