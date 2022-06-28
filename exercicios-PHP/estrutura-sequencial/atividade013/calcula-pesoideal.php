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
        $sexo = $_GET['sexo'];
        $altura = $_GET['altura'] ?? 0;

        if ($sexo==="F"){
           $pesoIdeal = (62.1*$altura) - 44.7;
           echo "Seu peso ideal é de: ".$pesoIdeal;
        }elseif ($sexo==="M"){
            $pesoIdeal = (72.7*$altura) - 58;
            echo "Seu peso ideal é de: ". $pesoIdeal;
        }

    ?>
</body>
</html>