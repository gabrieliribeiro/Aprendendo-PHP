<?php

$dados=[
    'nome' => 'Gabrieli',
    'nota' =>10,
    'idade' =>19
];

//list('nome'=> $nome,'nota'=>  $nota,'idade'=>$idade) = $dados;

extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));