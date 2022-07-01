<!--
    Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.
    Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros,
    que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.
    Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
        comprar apenas latas de 18 litros;
        comprar apenas galões de 3,6 litros;
        misturar latas e galões, de forma que o desperdício de tinta seja menor.
        Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.

        https://wiki.python.org.br/EstruturaSequencial
-->

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resposta</title>
    <style>
        ul{
            list-style: none;
        }
        .item{
            position: relative;
            margin: 10px 0px;
        }
        .item::before{
            content: '';
            position: relative;
            left: 0;
            top: 0;
            padding: 5px 15px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-right: 3px;
        }
        .item::before{
            content: '\e122';
            position: relative;
            left: 0;
            top: 0;
            font-size: 100%;
            color: #222
            margin-right: 3px;
        }
    </style>
</head>
<body>
    <h3>O que você irá precisar:</h3>
    <?php
        $area=$_GET['area_pintada'] ?? 0;
        $litro= $area/6;
        $litrosLata=18;
        $listrosGalao=3.6;
        $precoLata=80;
        $precoGalao=25;

        #Latas de Tinta
        $quantidadeLatas = $litro/$litrosLata;
        $precoFinalLata= $quantidadeLatas*$precoLata;

        #Galões de Tinta
        $quantidadeGalao = $litro/$listrosGalao;
        $precoFinalGalao = $quantidadeGalao*$precoGalao;

        #Mistura de latas e galões
        $folgaLitros=$litro*1.1;
        $quantLataMix=intval($folgaLitros/$litrosLata);

        $litroFolgaFaltando = $folgaLitros-($quantLataMix*$litrosLata);
        $quantGalaoMix = $litroFolgaFaltando/$listrosGalao;

        $precoFinalMix=($quantLataMix*$precoLata)+($quantidadeGalao*$precoGalao);

    ?>
    <ul>
        <li>Latas de Tinta:</li>
        <li class="item">A quantidade ao comprar apenas latas de tinta de 18L será: <?=$quantidadeLatas?> </li>
        <li class="item">O valor total da compra será: <?=round($precoFinalLata,2)?> </li>
        <li>Galões de Tinta:</li>
        <li class="item">A quantidade ao comprar apenas galões de tinta de 3.6L será: <?=$quantidadeGalao?> </li>
        <li class="item">O valor total da compra será: <?=round($precoFinalGalao,2)?> </li>
        <li>Mix de Latas e Galões de Tinta:</li>
        <li class="item">A quantidade ao comprar apenas galões de tinta será: <?=$quantGalaoMix?> </li>
        <li class="item">A quantidade ao comprar apenas latas de tinta será: <?=$quantLataMix?> </li>
        <li class="item">O valor total da compra será: <?=round($precoFinalMix,2)?> </li>
    </ul>

</body>
</html>
