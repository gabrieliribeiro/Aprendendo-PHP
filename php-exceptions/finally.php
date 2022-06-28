<?php

function a():int
{
    try {
        echo"Código ";
        throw new Exception();
        return 0;
    }catch (Throwable $e){
        echo "Problema ";
        return 1;
    } finally {
        echo "Final da função ";
    }
}

echo a();