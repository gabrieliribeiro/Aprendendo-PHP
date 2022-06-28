<!--
    Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês.
    https://wiki.python.org.br/EstruturaSequencial
-->

<!doctype html>
<html lang="pt-bt" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Calculo de salário</h1>
    <form method="get" action="calcula-salario.php">
        <p>Quanto ganha por hora? <input type="number" step="0.01" name="salario"/></p>
        <p>Horas trabalhadas no mês: <input type="number" step="0.01" name="horas"/></p>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
