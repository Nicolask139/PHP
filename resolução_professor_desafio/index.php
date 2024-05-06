<?php

include_once("backendd.php");
?>

<div style="background-color: yellowgreen; padding-bottom: 15px" >
    <h1 style="margin: 0px;">Produtos acima de 10 reais:</h1>
</div>

<div style="background-color: grey;">
    <ul>
        <?php
        foreach ($produtosAcimaDe10 as $produto) {
            echo "<li>$produto[nome] . R$ . $produto[preco]</li>";
        }
        ?>
    </ul>
</div>