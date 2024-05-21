<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Integrantes</title>
</head>
<body>
    <h1>Integrantes do Grupo</h1>
    <?php include 'alunos.php'; ?>

    <ul>
        <?php
        foreach ($integrantes as $integrante) {
            echo "<li>$integrante</li>";
        }
        ?>
    </ul>
</body>
</html>
