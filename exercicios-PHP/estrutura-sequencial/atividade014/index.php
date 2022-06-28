<!--
    João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho.
    Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar
    uma multa de R$ 4,00 por quilo excedente. João precisa que você faça um programa que leia a variável peso (peso de peixes) e calcule o excesso.
    Gravar na variável excesso a quantidade de quilos além do limite e na variável multa o valor da multa que João deverá pagar.
    Imprima os dados do programa com as mensagens adequadas.
-->

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <div>
        <form method="get" action="calcula-rendimento.php">
            <h2>Programa de controle de rendimento</h2>
            <label for="peso_peixe">Quantos quilos?</label> <input type="number" step="0.01" name="peso_peixe" id="peso_peixe"> <br>
            <input type="submit" value="Calcula">
        </form>
    </div>
</body>
</html>