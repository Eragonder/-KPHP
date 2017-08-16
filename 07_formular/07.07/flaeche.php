<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description:
 * Date: 05.07.2017
 * Time: 09:10
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fäche</title>
    <meta name="description" content= "Fläche berechnen">
</head>
<body>

    
    <h1>Fläche berechnen</h1>
    <form action="flaeche.php" method="GET">
        <label>
            Länge:
            <input type="number" id="vorname" name="länge" autofocus>
            <br>
        </label>
        <label>
            Breite:
            <input type="number" id="nachname" name="breite">
            <br>
        </label>
        <input type="submit" value="Daten absenden" name="send">
    </form>
    <?php
    if ($_GET != null) {
        $fläche = $_GET['länge'] * $_GET['breite'];
        echo $fläche;
    }
    ?>
</body>
</html>