<?php

$numeros = [2, 5, 8, 10, 13, 15, 17, 20, 23, 25, 28, 30, 33, 35, 38];

foreach ($numeros as $numero) {
    
    if ($numero % 2 == 0) {
        echo "$numero é par.<br>";
    } else {
        echo "$numero é ímpar.<br>";
    }
}
?>
