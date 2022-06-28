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
        $peso = $_GET['peso_peixe'] ?? 0;

        if ($peso<=50){
            echo "Peso de peixes dentro do que é estabelecido pelo regulamento de pesca do estado de São Paulo.";
        }elseif ($peso>50){
            $excesso=$peso-50;
            $multa=$excesso*4;
            echo "Peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo!";
            echo"O peso excedente é de:". $excesso;
            echo"Valor da multa é de:" . $multa;
        }
    ?>
</body>
</html>