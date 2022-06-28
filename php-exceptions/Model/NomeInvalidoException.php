<?php

namespace Model;

class NomeInvalidoException extends \DomainException

{
    public function __construct(string  $nomeTitular)
    {
        $mensagem = "O nome $nomeTitular é inválido, nome do titular deve ter mais de 5 caracteres!";
        parent::__construct($mensagem);
    }

}