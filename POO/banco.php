<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$gabrieli = new Titular(new CPF('123.456.789-10'), 'Gabrieli Ribeiro');
$primeiraConta = new Conta($gabrieli);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$anaMaria = new Titular(new CPF('129.465.789-20'), 'Ana Maria');
$segundaConta =  new Conta($anaMaria);
var_dump($segundaConta);

$novaConta=new Conta(new Titular(new CPF('123'), 'ABCDEFG'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();