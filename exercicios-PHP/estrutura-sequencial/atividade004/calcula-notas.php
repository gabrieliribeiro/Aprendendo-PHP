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
    <h1>Resultado Média:</h1>
    <?php
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $nota3 = isset($_GET["nota3"])?$_GET["nota3"]:0;
        $nota4 = isset($_GET["nota4"])?$_GET["nota4"]:0;

        $soma = $nota1+$nota2+$nota3+$nota4;

        $media = $soma/4;
    ?>
    <h2>A média final é: <?php echo $media; ?></h2>
</body>
</html>
