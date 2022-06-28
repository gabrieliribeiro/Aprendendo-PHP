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
    <h1>Resposta </h1>
    <?php

    $metros = isset($_GET['metro'])?$_GET['metro']:0;

    $centimetros = $metros * 100;

    ?>

    <h2> <?php echo $metros . "m"; ?> em centimetros é: <?php echo $centimetros. "cm"; ?> </h2>
</body>
</html>
