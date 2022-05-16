<?php

$notasBimestre1 =[
    'Ana'=> 10,
    'Gabrieli'=> 8,
    'Raul'=> 6,
    'Davi'=> 9,
    'Vinicius'=> 7
];

$notasBimestre2 =[
    'Ana'=> 10,
    'Raul'=> 6,
    'Davi'=> 8,

];

$alunosFaltaram = array_diff_key($notasBimestre1, $notasBimestre2);
$nomeAlunos= array_keys($alunosFaltaram);
$notasAlunos= array_values($alunosFaltaram) ;

var_dump(array_combine($notasAlunos, $nomeAlunos));