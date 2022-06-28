<?php

/**
 * $arquivo = fopen('cursos-php.txt', 'w');

    $curso = 'Design Patterns PHP I: Boas práticas de programação';

    fwrite($arquivo, $curso);

    fclose($arquivo);
 */

/**
 * $arquivo = fopen('cursos-php.txt', 'a');

    $curso = "\nDesign Patterns PHP II: Boas práticas de programação";

    fwrite($arquivo, $curso);

    fclose($arquivo);
 */


$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);