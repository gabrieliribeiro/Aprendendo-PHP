
<!--
    Faça um Programa que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius.
       C = 5 * ((F-32) / 9).
    https://wiki.python.org.br/EstruturaSequencial
-->

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULÁRIO</title>
</head>
<body>
    <h1>Conversor de Graus</h1>
    <h2>Informe o grau em Fahrenheit para converesão</h2>
    <form method="get" action="conversor-graus.php">
        <p>F: <input type="number" step="0.01" name="fahrenheit"/></p>
        <input type="submit" value="conveter">
    </form>

</body>
</html>