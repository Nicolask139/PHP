<?php

class Pessoa{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;
}

$victor = new Pessoa;

echo $victor::PERNAS;

?>