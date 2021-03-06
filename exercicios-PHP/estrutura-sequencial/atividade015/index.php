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
    <title>Formulário</title>
</head>
<body>
    <div>
        <form method="get" action="calcula_salario.php">
            <h2>Calcula rendimento de salário:</h2>
            <label for="salario_bruto">Quanto que você ganha por hora?
                <input type="number" step="0.01" name="salario_bruto" id="salario_bruto">
            </label> <br>
            <label for="horas_trabalhadas">Quantas horas você trabalhou neste mês?
                <input type="number" step="0.01" name="horas_trabalhadas" id="horas_trabalhadas">
            </label> <br>
            <input type="submit" value="calcular">
        </form>
    </div>
</body>
</html>