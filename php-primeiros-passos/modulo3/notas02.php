<?php

$notas =[
    'Ana'=> 10,
    'Gabrieli'=> null,
    'Raul'=> 6,
    'Davi'=> 9,
    'Vinicius'=> 7
];

krsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo 'Sim, é um array'. PHP_EOL;
}

var_dump(array_is_list($notas));

echo "Ana fez a prova:" . PHP_EOL;
var_dump(isset($notas['Ana']));

echo "Alguém tirou 10?\n";
var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?\n";
echo array_search(10 , $notas, true);

/**
 * array_key_exits = verifica se a chave existe
 * in_array = verifica se o valor existe
 * isset = verifica se a chave existe e não é nula
 */