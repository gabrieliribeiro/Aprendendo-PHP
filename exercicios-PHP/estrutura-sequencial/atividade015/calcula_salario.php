<!--
    Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês,
    sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um programa que nos dê:
        salário bruto.
        quanto pagou ao INSS.
        quanto pagou ao sindicato.
        o salário líquido.
    calcule os descontos e o salário líquido, conforme a tabela abaixo:
        + Salário Bruto : R$
        - IR (11%) : R$
        - INSS (8%) : R$
        - Sindicato ( 5%) : R$
        = Salário Liquido : R$
    Obs.: Salário Bruto - Descontos = Salário Líquido.
-->



<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resposta</title>
</head>
<body>
    <?php
        $salario=$_GET['salario_bruto'] ?? 0;
        $horasTraba= $_GET['horas_trabalhadas'] ?? 0;
        $salarioBruto=$salario*$horasTraba;
        $ir=$salarioBruto*0.11;
        $inss=$salarioBruto*0.08;
        $sindicato=$salarioBruto*0.05;
        $descontos=$ir+$inss+$sindicato;
        $salarioLiquido=$salarioBruto-$descontos;
    ?>
    <ul>
        <h3>Salário do mês:</h3>
        <li>Salário Bruto : R$ <?=$salarioBruto;?></li>
        <li>IR (11%) : R$ <?=$ir;?></li>
        <li>INSS (8%) : R$ <?=$inss;?></li>
        <li>Sindicato ( 5%) : R$ <?=$sindicato;?></li>
        <li>Salário Liquido : R$ <?=$salarioLiquido;?></li>
    </ul>
</body>
</html>