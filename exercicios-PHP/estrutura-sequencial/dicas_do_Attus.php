<!--
    Tendo como dados de entrada a altura de uma pessoa, construa um algoritmo que calcule seu peso ideal, usando a seguinte fórmula:
    (72.7*altura) - 58
    https://wiki.python.org.br/EstruturaSequencial

-->

<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Oh Gabi, só pra tu pegar a visão</h2>
        <ul>
            <li>Tu pode mudar isso: <?php echo "Print de alguma coisa" ?></li>
            <li>Por isso: <?= "Print de alguma coisa" ?></li>
            <!-- O '?=' serve como  um echo -->
        </ul>
        <ul>
            <li>Tu pode mudar isso: <?php isset($_GET['num1'])?$_GET['num1']:0 ?></li>
            <li>Por isso: <?php $_GET['num1'] ?? 0 ?></li>
        </ul>
        <ul>
            <li>
                Tais associando um <code>input</code> a um <code>p</code>. Ex: <p>°C: <input type="number" step="0.01" name="celcius"/></p>
            </li>
            <li>
                <!-- Usando `label`, quando tu clica no texto dentro dele ele te leva pro `input`, usando o `p` não acontece nada -->
                Deve ser assim:
                <!-- No `for` do label tu coloca o id do teu `input` -->
                <ul>
                    <li>
                        <label for="nome">Bote teu nome ai fioti</label> <input type="text" name="nome" id="nome">
                    </li>
                    <li>
                        <label>
                            Bote teu nome ai fioti
                            <input type="text" name="nome" id="nome">
                        </label>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>