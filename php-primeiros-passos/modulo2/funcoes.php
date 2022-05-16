<?php

function deposito(array $conta, float $valorAdepositar): array
{
    if ($valorAdepositar > 0){
        $conta['saldo'] += $valorAdepositar;
    }else{
        exibirMensagem("Você não pode depositar um valor negativo!!");
    }
    return $conta;
}

function sacar(array $conta, float $valorAsacar): array
{
    if ($valorAsacar > $conta['saldo']){
        exibirMensagem("Você não pode sacar este valor!");
    }else{
        $conta['saldo'] -= $valorAsacar;
    }
    return $conta;
}

function exibirMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
};

function titularLetraMaiuscula(array &$conta)
{
    $conta['titular']=strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo  "<li>Titular: $titular. Saldo: $saldo </li>";
}