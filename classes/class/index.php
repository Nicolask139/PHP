<?php

class Pessoa {
    function falar(){

        echo "Ola, eu sou um objeto";
    }
}

$victor = new Pessoa;

$victor -> falar();