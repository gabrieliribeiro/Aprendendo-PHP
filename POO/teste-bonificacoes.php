<?php

require_once 'autoload.php';

use Model\CPF;
use Model\Funcionarios\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Service\ControladorBonificacao;

$umFuncionario= new Desenvolvedor(
    'Gabrieli Ribeiro',
    new CPF ('123.456.789-10'),
    1000);

$umFuncionario->sobeDeNivel();

$outroFuncionario = new Gerente(
  'Raul Pacheco',
  new CPF('987.654.321-10'),
  3000);

$umDiretor = new Diretor(
    'Andreza Ribeiro',
    new CPF('987.876.982-10'),
    5000);

$umEditor = new EditorVideo(
    'Bonnie',
    new CPF('345.213.567-32'),
    1500
);



$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($outroFuncionario);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal();