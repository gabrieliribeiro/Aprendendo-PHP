<!--
    Tendo como dados de entrada a altura de uma pessoa, construa um algoritmo que calcule seu peso ideal, usando a seguinte fórmula:
    (72.7*altura) - 58
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
    <div>
        <h2>Calcule seu peso ideal!</h2>
        <form method="get" action="calcula-peso.php">
            <label for="altura">Informe sua altura:</label> <input type="number" step="0.01" name="altura" id="altura">
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>