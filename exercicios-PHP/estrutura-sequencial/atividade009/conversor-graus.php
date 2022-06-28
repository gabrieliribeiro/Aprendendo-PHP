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
        $fahren = isset($_GET['fahrenheit'])?$_GET['fahrenheit']:0;
        $celcius = 5 * (($fahren-32) / 9);
    ?>
    <p> <?php echo number_format($fahren, 1, ',', '.') ; ?> °F é igual à  <?php echo  number_format($celcius, 1, ',', '.'); ?> °C</p>

</body>
</html>




