<?php

class MinhaExcecao extends DomainException {

    public function exibeGabi()
    {
        echo "Gabi";
    }

}

try {
    throw new MinhaExcecao();
}catch (MinhaExcecao $e){
    $e->exibeGabi();
}
