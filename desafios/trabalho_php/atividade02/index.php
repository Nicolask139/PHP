<?php
$numero = 5; 

if ($numero > 0) {
    echo "Valor da variável é positivo<br>";
} elseif ($numero < 0) {
    echo "Valor da variável é negativo<br>";
} else {
    echo "Igual a Zero<br>";
}

echo "Tabuada de $numero:<br>";
for ($i = 0; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>
