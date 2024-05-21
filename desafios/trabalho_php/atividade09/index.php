<?php

$numero1 = 10;
$numero2 = 20;


echo "Antes da troca: ";
echo "Número 1: $numero1, Número 2: $numero2 <br>";


[$numero1, $numero2] = [$numero2, $numero1];


echo "Depois da troca: ";
echo "Número 1: $numero1, Número 2: $numero2";
?>
