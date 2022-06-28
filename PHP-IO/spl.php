<?php

$arquivoCursos = new SplFileObject('curso.csv');

while(!$arquivoCursos->eof()){
    $linha = $arquivoCursos->fgetcsv(';');
    echo utf8_encode($linha[0]). PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');