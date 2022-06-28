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
    <h1>Resposta</h1>
    <?php
    $raio= isset($_GET['raio'])?$_GET['raio']:0;
    $area =  M_PI * ($raio * $raio);
    ?>
    <h2><?php echo "A área desse circulo é de: ".number_format($area,2,',','.'); ?></h2>
</body>
</html>
