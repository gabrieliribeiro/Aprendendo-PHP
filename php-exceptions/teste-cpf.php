<?php

use Model\Conta\ContaCorrente;
use Model\Conta\Titular;
use Model\CPF;
use Model\Endereco;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.78-1'),
            'Deza',
            new Endereco('cidade', 'bairro', 'rua', 'numero')
        )
    );
}catch (InvalidArgumentException $exception){
    echo "O CPF recebido é invalido!!";
}