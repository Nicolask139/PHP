<?php

include_once("backend.php");
?>

<div style="background-color: yellowgreen; padding-bottom: 15px" >
    <h1 style="margin: 0px;">Professor <?= $professor ?> </h1>
</div>

<div style="background-color: grey;">
    <h2 style="margin: 0px;"> Alunos: </h2>
    <ul>
        <?php
        foreach ($alunos as $alunos) {
            echo "<li>$alunos</li>";
        }
        ?>
    </ul>
</div>