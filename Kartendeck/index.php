<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description:
 * Date: 04.07.2017
 * Time: 10:39
 */ ?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Kartendeck</title>
    </head>
    <body>

        <?php
            $cards  = array();
            $color  = array('clubs','diamonds','hearts','spades');
            $number = array('a','2','3','4','5','6','7', '8', '9','10','j','q','k');
            $xcolor = 0;
            $xnumber = 0;
        for ($i=0; $i<52; $i++) {
            if (isset($_GET['action']) && $_GET['action'] === 'shuffle') {
                shuffle($color);
                shuffle($number);
            }
            $cards[$i]['color'] = $color[$xcolor];
            $cards[$i]['numb'] = $number[$xnumber];
            echo "<img src='cards/$color[$xcolor]_$number[$xnumber].png' style='padding: 1px'>";
            $xnumber++;
            if ($xnumber == 13) {
                $xnumber = 0;
                echo "<br>";
                $xcolor++;
            }
        }
        ?>
        <a href="index.php?action=shuffle">mix</a>
        <a href="index.php">sort</a>
    </body>
</html>