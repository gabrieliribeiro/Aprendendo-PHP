<?php

$dadosEmString = '[
    {
        "pais": "Brasil",
        "medalhas": {
        "ouro": 3,
            "prata": 5,
            "bronze": 3
        }
    },
    {
        "pais": "Costa rica",
        "medalhas": {
        "ouro": 5,
            "prata": 4,
            "bronze": 4
        }
    },
    {
        "pais": "Estados unidos",
        "medalhas": {
        "ouro": 4,
            "prata": 3,
            "bronze": 5
        }
    },
    {
        "pais": "Trindade e tobago",
        "medalhas": {
        "ouro": 4,
            "prata": 3,
            "bronze": 4
        }
    }
]';


$dadosEmJson = json_decode($dadosEmString, true);

$numeroDePaises = count($dadosEmJson);
echo "Número de países participantes: $numeroDePaises";

$dadosEmJson = array_map(function ($item) {
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER, "UTF-8");
    return $item;
}, $dadosEmJson);

var_dump($dadosEmJson);

usort($dadosEmJson, function ($item1, $item2){
    return $item2['medalhas']['ouro']-$item1['medalhas']['ouro'];
});

usort($dadosEmJson, function ($item1, $item2) {
    $medalhas1 = $item1['medalhas'];
    $medalhas2 = $item2['medalhas'];

    return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro']
        : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
            ? $medalhas2['prata'] - $medalhas1['prata']
            : $medalhas2['bronze'] - $medalhas1['bronze']);
});

/**
 * usort($dadosEmJson, function ($item1, $item2){
    if ($item1['medalhas']['ouro']>$item2['medalhas']['ouros']){
        return -1;
    }
    if ($item1['medalhas']['ouro']<$item2['medalhas']['ouro']){
        return 1;
    }
    return 0;
});
 */

$numeroDeMedalhas = array_reduce($dadosEmJson, function ($medalhasAcumuladas, $itemAtual){
   $medaslhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasPaisAtual, $medalhasDoPaisAtual){
      return $medalhasAcumuladasPaisAtual+$medalhasDoPaisAtual;
   }, 0);

   return$medalhasAcumuladas+$medaslhasDoPais;
}, 0);

echo"Total de medalhas entregue foram de: $numeroDeMedalhas";

$paisesComNomeSemEspaco = array_filter($dadosEmJson, function ($item) {
    return strpos($item['pais'], ' ') === false;
});