<?php

$produtos = array(

    array("nome" => "produto 001", "preco" => 5),
    array("nome" => "produto 002", "preco" => 12),
    array("nome" => "produto 003", "preco" => 15),
    array("nome" => "produto 004", "preco" => 20)
);

function exibirAcimaDe10($produtos){
    $produtosAcimaDe10 = array();

    foreach ($produtos as $produto){
        if($produto["preco"] > 10){
            $produtosAcimaDe10[] = $produto;
        }
    }

    return $produtosAcimaDe10;
}

$produtosAcimaDe10 = exibirAcimaDe10($produtos);

