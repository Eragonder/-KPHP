<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description:
 * Date: 05.07.2017
 * Time: 10:51
 */
echo '<pre>';
echo implode('<br>', $_POST);
echo '<br>';
print_r($_POST);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
</head>
<body>
    <form action="formular.php" method="post">
        <input type="email" name="email" ><br>
        <input type="button" name="button" ><br>
        <input type="checkbox" name="checkbox" ><br>
        <input type="color" name="color" ><br>
        <input type="date" name="date" ><br>
        <input type="datetime" name="datetime" ><br>
        <input type="datetime-local" name="datetime-local" ><br>
        <input type="number" name="number" ><br>
        <input type="password" name="password" ><br>
        <input type="radio" name="radio" ><br>
        <input type="text" name="text" ><br>
        <input type="url" name="url" ><br>
        <input type="week" name="week" ><br>
        <input type="hidden" name="hidden"><br>
        <input type="range" min="0"  max="1000000" name="range"><br>
        <input type="submit">

    </form>
    <pre>
        Hi              ...............................................................................................................................................          ho
        lol            i                12         3                .

    </pre>
</body>
</html>