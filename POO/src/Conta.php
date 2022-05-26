<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas=0;

    public function __construct(Titular $titular)
    {
        $this->titular=$titular;

        $this->saldo=0;

        self::$numeroDeContas++;
    }

    //Funções de Saldo
    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->  saldo){
            echo "Saldo indisponivel";
            return;
        }

        $this->saldo-=$valorASacar;
    }
    
    public function  deposita(float $valorADepositar):void
    {
        if ($valorADepositar<0){
            echo "O valor precisa ser positivo";
            return;
        }

        $this->saldo+=$valorADepositar;

    }

    public function transfere(float $valorATransferir, Conta $contaDestino):void
    {
        if ($valorATransferir >$this->saldo){
            echo "Valor indisponivel";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        
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
}