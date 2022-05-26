<?php

namespace App\Alura;

class Usuario
{

    private $nome;
    private $sobrenome;
    private $senha;
    private $tratamento;


    public function __construct(string $nome, string $senha, string $genero)
    {
        //Nome e Sobrenome
        $this->setNomeSobrenome($nome);

        //Senha
        $this->validaSenha($senha);

        //Tratamento
        $this->adicionaTratamento($nome, $genero);
    }

    //Funçtions Nome e Sobrenome
    private function setNomeSobrenome(string $nome)
    {

        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] === "") {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Sobrenome Inválido";
        } else {
            $this->sobrenome = $nomeSobrenome[1];
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    //senha

    public function getSenha(): string
    {
        return $this->senha;
    }

    private function validaSenha(string $senha):void
    {
        $tamanhoSenha = strlen(trim($senha));

        if ($tamanhoSenha>6){
            $this->senha=$senha;
        }else{
            $this->senha="Senha inválida!";
        }
    }

    //Tratamento
    private function adicionaTratamento(string $nome, string $genero)
    {
        if ($genero === 'M') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
        }

        if ($genero === 'F') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Srª', $nome, 1);
        }
    }

    public function getTratamento(): string
    {
        return $this->tratamento;
    }
}