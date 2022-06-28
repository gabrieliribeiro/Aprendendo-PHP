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
    <?php

        $altura = $_GET['altura'] ?? 0;
        $pesoIdeal=(72.7*$altura) - 58;
    ?>

    <p>O seu peso ideal é de: <?= $pesoIdeal ?></p>
</body>
</html>