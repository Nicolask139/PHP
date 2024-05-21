<?php

$salario_atual = 3600; 

if ($salario_atual <= 1300) {
    $percentual_aumento = 20;
} elseif ($salario_atual <= 2000) {
    $percentual_aumento = 15;
} elseif ($salario_atual <= 3500) {
    $percentual_aumento = 10;
} else {
    $percentual_aumento = 5;
}

$aumento = ($salario_atual * $percentual_aumento) / 100;


$novo_salario = $salario_atual + $aumento;

echo "Salário antes do reajuste: R$ $salario_atual<br>";
echo "Percentual de aumento aplicado: $percentual_aumento%<br>";
echo "Valor do aumento: R$ $aumento<br>";
echo "Novo salário, após o aumento: R$ $novo_salario";
?>
