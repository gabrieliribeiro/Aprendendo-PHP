<?php

$idade=20;
$pessoas = 1;
echo"Você só pode entrar se tiver apartir de 18 anos ou a partir de 16 anos acompanhado! \n";
if ($idade>=18){
    echo"Você tem $idade, então pode entrar sozinho!!\n";
}
elseif ($idade >= 16 and $pessoas>1){
    echo"Você tem $idade e está acompanhado(a), pode entrar!!\n";
}else{
    echo"Você não tem idade o suficiente para entrar ou está desacompanhado!";
}

