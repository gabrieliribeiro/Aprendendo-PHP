<!--
    Tendo como dado de entrada a altura (h) de uma pessoa, construa um algoritmo que calcule seu peso ideal, utilizando as seguintes fórmulas:
        Para homens: (72.7*h) - 58
        Para mulheres: (62.1*h) - 44.7
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
        <h2>Calcule seu peso ideal!!</h2>
        <form method="get" action="calcula-pesoideal.php">
            <label for="sexo">Qual o seu genero F/M:</label> <input type="text" name="sexo" id="sexo"> </br>
            <label for="altura">Qual a sua altura:</label> <input type="number" name="altura" id="altura" step="0.01"> </br>
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>