<?php

namespace Model\Funcionarios;

use Model\CPF;
use Model\Pessoa;

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome):void
    {
        $this->nome=$nome;
    }

    public function recebeAumento(float $valoAumento):void
    {
        if ($valoAumento<0){
            echo "Aumento deve ser positivo!";
            return;
        }
        $this->salario+=$valoAumento;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao():float;
}