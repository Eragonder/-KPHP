<?php
/*
 * Einfache PHP Beispiele
 * Alex Grädel, 3. Juli
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Einfaches HTML Grundgerüst</title>
    <meta charset="utf-8" >
    <meta name="description" content= "blablabla">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Grundgerüst</h1>
    <?php
    echo '<table>';
    for ($i=0; $i<10; $i++) {
        echo '<tr><td>Hello World</td></tr>';
    }
    echo '</table>';
    echo '<br>'
    ?>

    <?php
        $meinName = 'Alex';
        echo "$meinName";
        // X """" X "/"/""
        # Comment
        # Comment
        //=== Dantentyp vergleichen
        echo '$meinName';
    ?>

</body>
</html>