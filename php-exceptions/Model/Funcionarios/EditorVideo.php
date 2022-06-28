<?php

namespace Model\Funcionarios;

class EditorVideo extends Funcionario
{

    public function calculaBonificacao(): float
    {
        return 600;
    }
}