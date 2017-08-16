<?php
/**
 * Autor: Alex
 * Description: REGEX
 * Date: 10.07.2017
 * Time: 13:06
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>regex.php</title>
</head>
<body>
<?php
$plattern = '/^[a-z0-9_\-\.]+@[a-z0-9\.\-]{2,}\.[a-z]{2,4}$/i';
$email = 'lol@lol.com';
if (preg_match($plattern,$email)) {
    echo 'ja voll';
} else {
    echo 'nooooooooooo';
}
?>
</body>
</html>