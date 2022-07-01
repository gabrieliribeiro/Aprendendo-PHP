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
    <h3>O que você irá precisar:</h3>
    <?php
        $area=$_GET['area_pintada'] ?? 0;
        $litro= $area/3;

        if ($area % 54 == 0){
            $latas = $area/54;
        }else{
            $latas = intval($area / 54) + 1;
        }
        $precoLata= $latas*80;

        echo "A quantidade de latas de tinta a serem compradas será: " . $latas;
        echo "<br>";
        echo "O valor total da compra será: ". round($precoLata,2);

    ?>

</body>
</html>