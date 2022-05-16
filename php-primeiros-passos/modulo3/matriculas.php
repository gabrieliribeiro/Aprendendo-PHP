<?php

$alunos2021 =[
    'Ana',
    'Gabrieli',
    'Raul',
    'Davi',
    'Vinicius'
];

$novosAlunos =[
    'Patricia',
    'Nico',
    'Naruto',
    'Kakashi'
];

$alunos2022 = [...$alunos2021, "Carlos", ...$novosAlunos];

//$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);