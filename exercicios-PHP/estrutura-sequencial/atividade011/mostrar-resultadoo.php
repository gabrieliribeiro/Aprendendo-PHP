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
        $num1 = isset($_GET['num1'])?$_GET['num1']:0;
        $num2= isset($_GET['num2'])?$_GET['num2']:0;
        $num3 = isset($_GET['num3'])?$_GET['num3']:0;

        $resultado1 = ($num1*2) + $num2/2;
        $resultado2 = ($num1*3) + $num3;
        $resultado3 =  $num3**3;

    ?>
    <p>Resultado do produto do dobro do primeiro com metade do segundo: <?php echo $resultado1;?></p>
    <p>Resultado da soma do triplo do primeiro com o terceiro: <?php echo $resultado2;?></p>
    <p>Resultado do terceiro elevado ao cubo: <?php echo  $resultado3;?></p>
</body>
</html>
