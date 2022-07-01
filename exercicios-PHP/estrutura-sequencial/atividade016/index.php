<!--
    Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.
    Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00.
    Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.
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
    <h1>Calculo de quantidade a ser comprada:</h1>
    <form method="get" action="calcula_tinta.php">
        <label for="area_pintada">Qual o tamanho em metros quadrados da área a ser pintada?
            <input type="number" step="0.01" name="area_pintada" id="area_pintada">
        </label> <br>
        <input type="submit" value="calcula">
    </form>
</body>
</html>