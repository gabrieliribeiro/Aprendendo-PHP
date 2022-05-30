<?php

namespace Model\Conta;

class ContaPopanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}