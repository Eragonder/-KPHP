<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description: Serverseitige Validierung
 * Date: 10.07.2017
 * Time: 08:57
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serverseitig Formular</title>
</head>
<body>
echo '<pre>';
    echo implode('<br>', $_POST);
    echo '<br>';
    print_r($_POST);
    echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.php</title>
</head>
<body>
<form action="index.php" method="post">
    <label>
        E-Mail:
        <input type="email" name="email" required>
        <br>
    </label>
    <label>
        E-Mail:
        <input type="email" name="email" required>
        <br>
    </label>
    <fieldset>
        <legend>Format</legend>
        <label>
            PDF:
            <input type="radio" name="format" value="pdf" required>
        </label>
        <label>
            ePUB:
            <input type="radio" name="format" value="epub" required>
        </label>
    </fieldset>
    <fieldset>
        <legend>Lermittel</legend>
        <p>
            <label>
                HTML5 Handbuch:
                <input type="checkbox" name="lerm[]">
            </label>
        </p>
        <p>
            <label>
                Einstieg in PHP:
                <input type="checkbox" name="lerm[]" value="php" >
            </label>
        </p>
        <p>
            <label>
                JavaScript Handbuch:
                <input type="checkbox" name="lerm[]" value="js" >
            </label>
        </p>
    </fieldset>
    <fieldset>
        <legend>Zahlungsart</legend>
        <label>
            Barzahlung:
            <input type="radio" name="pay" value="cash" required>
        </label>
        <label>
            Kreditkarte:
            <input type="radio" name="pay" value="credit" required>
        </label>
        <label>
            Rechnung:
            <input type="radio" name="pay" value="bill" required>
        </label>
    </fieldset>
    <input type="submit">
</form>
</body>
</html>
