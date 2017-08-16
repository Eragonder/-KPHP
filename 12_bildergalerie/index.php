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
                            echo '<form action="index.php" method="post">';
                            echo  "<figure>";
                            //echo "<a  target='bild'><img src='img/thumbnails/$file' class='img'></a>";

                            $title = ucfirst(str_replace($search , $replace ,$file));
                            echo "<a src='img/images/$file' data-lightbox='Galerie' data-title='$title'><img src='img/thumbnails/$file' class='img'></a>";
                            echo '<input type="submit" value="LÖSCHEN" name="Löschen" >';
                            echo "<input type='hidden' value='$file' name='file'>";
                            echo '<figcaption>' . $title . '</figcaption>';
                            echo '</figure>';
                            echo '</form>';
                        }
                    }
                    closedir($dh);
                }
            }
            if (isset($_POST['file'])){
                unlink('img/images/' . $_POST['file']);
                unlink('img/thumbnails/' . $_POST['file']);
                header('Location: index.php');
            }

            ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="image">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $dstPathImg = 'img/images/' . $_FILES['image']['name'];
            $dstPathThumb = 'img/thumbnails/' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $dstPathImg);

            copy($dstPathImg, $dstPathThumb);
            header('Loacation: index.php');
        }
        ?>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.min.js"></script>
</body>
</html>

