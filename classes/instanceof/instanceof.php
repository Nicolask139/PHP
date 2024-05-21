<?php

class Pessoa{};
class Carro{};

$victor = new Pessoa();
$bmw = new Carro();

if ($victor instanceof Pessoa){
    echo "Objeto da Classe Pessoa <br>";
}

if ($bmw instanceof Pessoa){
    echo "Objeto da Classe Pessoa <br>";
} else {
    echo "Esse objeto não é da classe Pessoa <br>";
}
?>

