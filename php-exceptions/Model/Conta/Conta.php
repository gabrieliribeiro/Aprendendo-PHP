<?php

namespace Model\Conta;

use http\Exception\InvalidArgumentException;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas=0;

    public function __construct(Titular $titular)
    {
        $this->titular=$titular;
        $this->saldo=0;

        self::$numeroDeContas++;
    }

    //Funções de Saldo
    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }
    
    public function  deposita(float $valorADepositar):void
    {
        if ($valorADepositar<0){
            throw new \InvalidArgumentException();
        }

        $this->saldo+=$valorADepositar;

    }

    public function recuperaSaldo(): float
    {
        return  $this->saldo;
    }

    //Funções Dados da conta

    public function recuperaNomeTitular():string
    {
       return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }
    
    //Funções da Conta
    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    abstract protected function percentualTarifa():float;

}