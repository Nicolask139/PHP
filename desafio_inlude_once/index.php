<?php

include("backend.php");

$produtosAcimaDez = filtroProdutosAcimaDez($produtos);

echo "<h1>Produtos com preço acima de dez reais: </h1>";
echo "<ul>";
foreach ($produtosAcimaDez as $produto => $preco){
    echo "<li>Nome do Produto: " . $produto . ", Preço: R$" . $preco . "</li>";
}
echo "<ul>";

?>

