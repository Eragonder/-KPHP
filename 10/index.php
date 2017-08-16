<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Description:
 * Date: 10.07.2017
 * Time: 10:51
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.php</title>
</head>
<body>
<?php
$name = '';
$vorname = '';
$email = '';
$info = Array();
$news = '';

//Regex
$pemail = '/^[a-z0-9_\-\.]+@[a-z0-9\.\-]{2,}\.[a-z]{2,4}$/i';

//Fehler Variablen
$fehlerVorname = false;
$fehlerName = false;
$fehlerEmail = false;
$fehlerLerm = false;
$fehlerNews = false;

$fehlermeldungen = Array();

if (isset($_POST['submit'])) {
    if(isset($_POST['vorname'])){
        $vorname = $_POST['vorname'];
    }
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['info'])) {
        $info = $_POST['info'];
    }

    if (isset($_POST['news'])) {
        $news = $_POST['news'];
    }

    if($vorname === '') {
        $fehlerVorname = true;
        $fehlermeldungen['vorname'] = "<p style='color: red;'>Bitte trag deinen Vornamen ein </p>";
    } //<?php if($fehlerVorname = true) echo'vorname';
    if($name === '') {
        $fehlerName = true;
        $fehlermeldungen['name'] = "<p style='color: red;'>Bitte trag deinen Namen ein </p>";
    }
    if($email === '') {
        $fehlerEmail = true;
        $fehlermeldungen['email'] = "<p style='color: red;'>Bitte tragen Sie eine Email Adresse ein </p>";
    }
    if(!preg_match($pemail, $email)) {
        $fehlerEmail = true;
        $fehlermeldungen['email'] = "<p style='color: red;'>Bitte tragen Sie eine gültige Email Adresse ein</p>";
    }
    if(empty($info)) {
        $fehlerInfo = true;
        $fehlermeldungen['info'] = "<p style='color: red;'>Bitte wähle eine Broschüre aus</p>";
    }
    if($news === '') {
        $fehlerNews = true;
        $fehlermeldungen['news'] = "<p style='color: red;'>Bitte wähle ein Angebot aus</p>";
    }

        if (count($fehlermeldungen) === 0) {
            echo strip_tags("Vielen Dank $vorname $name für Ihren einkauf");
        }else {
            echo implode(' ', $fehlermeldungen);
        }
    
}
?>
<style>.error > * {border-color: red; color: red; font-weight: bold;}</style>
<?php
if (!isset($_POST['submit']) && count($fehlermeldungen) === 0) {
?>

    <form action="index.php" method="post">
        <label class="<?= $fehlerVorname ? 'error' : '' ?>">
            <p>Vorname:</p>
            <input type="text" name="vorname" value="<?= $vorname ?>">
        </label>
        <label class="<?= $fehlerName ? 'error' : '' ?>">
            <p>Name:</p>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </label>
        <label class="<?= $fehlerEmail ? 'error' : '' ?>">
            <p>E-Mail:</p>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </label>
        <fieldset class="<?= $fehlerInfo ? 'error' : '' ?>">
            <legend>Infos</legend  class="<?= $fehlerInfo ? 'l' : '' ?>">
            <p>
                <label>
                    HTML5:
                    <input type="checkbox" name="info[]" value="HTML" <?php if (in_array('HTML', $info)) {
                        echo 'checked="checked"';
                    } ?>>
                </label>
            </p>
            <p>
                <label>
                    PHP:
                    <input type="checkbox" name="info[]" value="PHP" class="info" <?php if (in_array('PHP', $info)) {
                        echo 'checked="checked"';
                    } ?>>
                </label>
            </p>
            <p>
                <label>
                    JavaScript:
                    <input type="checkbox" name="info[]" value="JavaScript"
                           class="info" <?php if (in_array('JavaScript', $info)) {
                        echo 'checked="checked"';
                    } ?>>
                </label>
            </p>
        </fieldset>
        <fieldset class="<?= $fehlerNews ? 'error' : '' ?>">
            <legend>Ich abonniere den Newsletter</legend>
            <label>
                Ja:
                <input type="radio" name="news" value="ja" <?php if ($news == 'ja') echo 'checked="checked"'; ?>>
            </label>
            <label>
                Nein:
                <input type="radio" name="news" value="nein" <?php if ($news == 'nein') echo 'checked="checked"'; ?>>
            </label>
        </fieldset>
        <input type="submit" name="submit" value="Submit">
        <div>

        </div>
    </form>
<?php
}
?>
</body>
</html>