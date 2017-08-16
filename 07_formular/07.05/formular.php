<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description:
 * Date: 05.07.2017
 * Time: 08:49
 */ ?>
<?php

//globale GET variable
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
    <meta name="description" content= "Formular mit GET mit nur einer Datei">
</head>
<body>
    <h1>Formular mit der GET-Methode versenden</h1>
    <form action="formular.php" method="GET">
        <label>
            Vorname:
            <input type="text" id="vorname" name="vorname" autofocus>
            <br>
        </label>
        <label>
            Nachname:
            <input type="text" id="nachname" name="nachname">
            <br>
        </label>
        <label>
            Wohnort:
            <input type="text" id="wohnort" name="wohnort">
            <br>
        </label>
        <input type="submit" value="Daten absenden" name="send">
        <input type="reset"   value="Reset" name="lol">
    </form>
</body>
</html>