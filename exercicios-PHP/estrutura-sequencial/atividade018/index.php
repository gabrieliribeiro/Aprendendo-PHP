<!--
    Faça um programa que peça o tamanho de um arquivo para download (em MB) e a velocidade de um link de Internet (em Mbps),
    calcule e informe o tempo aproximado de download do arquivo usando este link (em minutos).

    https://wiki.python.org.br/EstruturaSequencial
-->

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <h2>Programa que calcula o tempo de download:</h2>
    <form method="get" action="calcula-download.php">
        <label for="tamanhoArquivo">Informe o tamanho do arquivo para download (MB):
            <input type="number" name="tamanhoArquivo" id="tamanhoArquivo">
        </label> <br>
        <label for="velocidadeInternet">Informe a velocidade da internet (MBps):
            <input type="number" name="velocidadeInternet" id="velocidadeInternet">
        </label><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>