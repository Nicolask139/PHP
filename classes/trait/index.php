<?php

trait Objeto{
    public function teste(){
        echo "Testando Traits";
    }
}

class Central {
    use Objeto;
}

$obj = new Central;
$obj->teste();

?>