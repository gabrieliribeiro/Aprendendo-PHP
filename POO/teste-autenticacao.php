<?php

use Model\CPF;
use Model\Funcionarios\Diretor;
use Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'Gabrieli',
    new CPF('123.345.567-12'),
    10000
);

$autenticador->tentaLogin($umDiretor, '1234');