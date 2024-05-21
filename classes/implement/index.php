<?php

interface Caracteristicas {
    const nome = "Victor";
}

class Pessoa implements Caracteristicas{
    public function imprimenome(){
        echo "Meu nome é " . self::nome;
    }
}

$pessoa = new Pessoa;
$pessoa->imprimenome();
