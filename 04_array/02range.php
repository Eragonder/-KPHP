<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Date: 03.07.2017
 * Time: 15:51
 */
?>

<?php
    $years = range(2015,2020);
    foreach ($years as $year ) {
        echo $year . ' ';
    }
    var_dump($years);
    echo '<pre>';
    print_r($years);
    echo implode('<br>', $years);
    echo '</pre>';
?>
