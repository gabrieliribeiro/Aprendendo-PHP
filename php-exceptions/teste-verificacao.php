<?php

use Model\Conta\{ContaCorrente, Titular};
use Model\{CPF, Endereco, NomeInvalidoException};


require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-10'),
            'Deza',
            new Endereco('cidade', 'bairro', 'rua', 'numero')
        )
    );
}catch (NomeInvalidoException $exception){
    echo $exception->getMessage();
}
