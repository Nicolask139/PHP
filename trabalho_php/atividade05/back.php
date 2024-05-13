<?php

function calcularMedia($notas) {

    $soma = array_sum($notas);
    $media = $soma / count($notas);
    
    if ($media >= 6) {
        echo "A média final é $media. Aluno aprovado.";
    } else {
        echo "A média final é $media. Aluno reprovado.";
    }
}
?>