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
        $tamanhoArquivo=$_GET['tamanhoArquivo']??0;
        $velocidadeInternet=$_GET['velocidadeInternet']??0;

        $tempoDownload=($tamanhoArquivo/$velocidadeInternet)*60;
    ?>
    <h3>Tempo aproximado de download do arquivo usando este link: <?=$tempoDownload?> minutos</h3>
</body>
</html>