<?php

$peso=52;
$altura=1.60;
$imc= $peso/$altura**2;

echo "Seu IMC é de: $imc!\n";

if ($imc < 18.5) {
    echo "Ele está abaixo do recomendado!!";
} elseif ($imc < 25) {
    echo "Ele está dentro do recomendado!!";
} else {
    echo "Ele está acima do recomendado!!";
}
