<?php


$produtos = array(
    "Milho" => 12.99,
    "Arroz" => 20.49,
    "Trigo" => 5.00,
    "Farinha" => 3.00
);


function filtroProdutosAcimaDez($produtos) {
    $produtosAcimaDez = array();

    foreach ($produtos as $produto => $preco) {
        if ($preco > 10) {
            $produtosAcimaDez[$produto] = $preco;
        }
    }
    return $produtosAcimaDez;
}


?>