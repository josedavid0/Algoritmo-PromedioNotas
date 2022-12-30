<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>Cantidad de notas <input type="text" name="txtCant"></p>
        <p><input type="submit"></p>
    </form>
    <?php
    if ($_POST) {
        $cant = $_POST['txtCant'];
        $i = 1;
    ?>
        <form action="index2.php" method="post">
        <?php
        while ($i <= $cant) {
        ?>
            <p>Nota <?php echo $i ?><input type="text" name="txtN<?php echo $i ?>"></p>
        <?php
            $i++;
        }
        ?>
        <input type="submit" value="Calcular">
        </form>
    <?php

    }
    ?>
</body>
</html>