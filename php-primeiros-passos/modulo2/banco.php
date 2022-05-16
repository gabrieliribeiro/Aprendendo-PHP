<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Gabrieli',
        'saldo' => 400
    ],
    '123.456.789-11' => [
        'titular' => 'Raul',
        'saldo' => 2000
    ],
    '123.256.789-12' => [
        'titular' => 'Andreza',
        'saldo' => 3000
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 200);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'], 500);

$contasCorrentes['123.456.789-10'] = deposito($contasCorrentes['123.456.789-10'], 900);

unset($contasCorrentes['123.256.789-12']);

titularLetraMaiuscula($contasCorrentes['123.456.789-10']);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf=>$conta){ ?>
        <dt><h3><?= $conta['titular'];?> - <?=$cpf;?></h3></dt>
        <dd>Saldo: <?=$conta['saldo'];?></dd>
        <?php } ?>
    </dl>
</body>
</html>
