<?php
/**
 * Bildergalerie
 * Alex Grädel
 * Date: 03.07.2017
 * Time: 11:00
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bildergalerie</title>
    <meta charset="utf-8" >
    <meta name="description" content= "blablabla">
    <link rel="stylesheet" href="style/lightbox.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <h1>Bildergalerie</h1>
    <div class="galerie">
            <?php
            $dir = "img/thumbnails/";
            $search = array (
                ".jpg", "_", "ae"
            );
            $replace = array (
                "", " ", "ä"
            );
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    while (($file = readdir($dh)) !== false) {
                        if (!is_dir($file)) {
                            echo  "<figure>";
                            //echo "<a  target='bild'><img src='img/thumbnails/$file' class='img'></a>";
                            $title = ucfirst(str_replace($search , $replace ,$file));
                            echo "<a href='img/images/$file' data-lightbox='Galerie' data-title='$title'><img src='img/thumbnails/$file' class='img'></a>";



                            echo '<figcaption>' . $title . '</figcaption>';
                            echo '</figure>';
                        }
                    }
                    closedir($dh);
                }
            }
            ?>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.min.js"></script>
</body>
</html>

