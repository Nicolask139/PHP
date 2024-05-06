<?php

include_once("backend.php");
?>

<div style="background-color: yellowgreen; padding-bottom: 15px" >
    <h1 style="margin: 0px;">Produtos acima de 10 reais:</h1>
</div>

<div style="background-color: grey;">
    <ul>
        <?php
        foreach ($produtosAcimaDe10 as $produto) {
            echo "<li>$produto</li>";
        }
        ?>
    </ul>
</div>