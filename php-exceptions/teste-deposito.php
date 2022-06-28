<?php

use Model\Conta\ContaCorrente;
use Model\Conta\Titular;
use Model\CPF;
use Model\Endereco;

require_once 'autoload.php';


$contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-10'),
            'Andreza',
            new Endereco('cidade', 'bairro', 'rua', 'numero')
        )
    );

try {
    $contaCorrente->deposita(-100);
}catch (InvalidArgumentException $exception){
    echo"Valor a depositar precisa ser positivo, seu ráquer peligroço!";
}
