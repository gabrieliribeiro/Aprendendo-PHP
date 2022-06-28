<!--
    Faça um Programa que peça as 4 notas bimestrais e mostre a média.
    https://wiki.python.org.br/EstruturaSequencial
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
    <h1>Informe as 4 notas bimestrais para cálculo da média</h1>
    <h2>Notas:</h2>
    <form method="get" action="calcula-notas.php">
        Nota1: <input type="number" name="nota1"/> <br/>
        Nota2: <input type="number" name="nota2"/> <br/>
        Nota3: <input type="number" name="nota3"/> <br/>
        Nota4: <input type="number" name="nota4"/> <br/>
        <br/>
        <input type="submit" value="Média"/>
    </form>
</body>
</html>