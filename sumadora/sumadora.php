<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sumadora BSK</title>
</head>
<body>
    <form class="caja" action="sumadora.php" method="get">
        <h1>SUMADORA PHP</h1>
        <input type="text" name="numero1" value="" placeholder="Ingresa un número">
        <input type="text" name="numero2" value="" placeholder="Ingresa un número">
        <input type="submit" name="" value="Sumar">
        <output type="number" name="" >
    </form>
</body>
</html>

<?php
    if (isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2'])) {
        $numero1=$_GET['numero1'];
        $numero2=$_GET['numero2'];
        echo $numero1+$numero2;

    }


?>