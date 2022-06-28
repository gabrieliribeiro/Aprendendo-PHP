<!doctype html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resposta</title>
</head>
<body>
    <h1>Folha de salário</h1>
    <?php
        $salHora = isset($_GET['salario'])?$_GET['salario']:0;
        $horasTrab = isset($_GET['horas'])?$_GET['horas']:0;

        $salario = $horasTrab*$salHora;
    ?>

    <h2>Seu salário esse mês é de: <?php  echo $salario; ?></h2>
</body>
</html>