<!--Faça um Programa que peça dois números e imprima a soma.-->
<!--https://wiki.python.org.br/EstruturaSequencial-->

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
    <h1>RESULTADO</h1>
    <?php
        $numero1 = isset($_GET["num1"])?$_GET["num1"]:0;
        $numero2 = isset($_GET["num1"])?$_GET["num2"]:0;
        $soma = $numero1+$numero2;
    ?>
    <h2>O resultado da soma é: <?php echo "$soma"; ?> </h2>
</body>
</html>







