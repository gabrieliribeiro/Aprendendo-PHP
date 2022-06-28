<?php

use Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Tubarão', 'Um bairro', 'Uma Rua', '440');
$outroEndereco = new Endereco('Imbituba', 'Um bairro ai', 'Uma rua lá', '350');


echo $umEndereco . PHP_EOL;
echo $outroEndereco;
