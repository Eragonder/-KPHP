<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description:
 * Date: 05.07.2017
 * Time: 09:20
 */


    if (count($_POST) != 0) {
        $fläche = $_POST['laenge'] * $_POST['breite'];
        echo $fläche;
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fäche</title>
        <meta name="description" content= "Fläche berechnen mit POST">
    </head>
    <body>


        <h1>Fläche berechnen mit POST</h1>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>
                Länge:
                <input type="number" id="laenge" name="laenge" autofocus>
                <input type="text" id="laenge" name="laenge" autofocus>
                <br>
            </label>
            <label>
                Breite:
                <input type="number" id="breite" name="breite">
                <br>
            </label>
            <input type="submit" value="Daten absenden" name="send">
        </form>
    </body>
</html>