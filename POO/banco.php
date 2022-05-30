<?php

//use Model\Conta\Conta;
use Model\Conta\{ContaCorrente, ContaPopanca, Titular};
use Model\{CPF, Endereco};

require_once 'autoload.php';

$endereco= new Endereco('Tubarão', 'Um bairro', 'Uma rua', '440');

$gabrieli = new Titular(new CPF('123.456.789-10'), 'Gabrieli Ribeiro', $endereco);
$primeiraConta = new ContaPopanca($gabrieli);
$primeiraConta->deposita(500);
$primeiraConta->saca(100);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$raulPacheco = new Titular(new CPF('129.465.789-20'), 'Raul Pacheco', $endereco);
$segundaConta =  new ContaCorrente($raulPacheco);
$segundaConta->deposita(600);
$segundaConta->transfere(300, $primeiraConta);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;

$outroEndereco= new Endereco('Imbituba', 'Um Bairro', 'Uma Rua', '502');
$novaConta=new ContaCorrente(new Titular(new CPF('123.854.784-96'), 'ABCDEFG', $outroEndereco));
unset($segundaConta);
echo ContaCorrente::recuperaNumeroDeContas();