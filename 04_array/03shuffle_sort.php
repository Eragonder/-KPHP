<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Date: 03.07.2017
 * Time: 16:15
 */
?>

<?php
    $orte = array('baum','öpö','hi','mi','qwertzuio','lpllpakfgg','dwdwd');
    foreach ($orte as $ort){
        echo $ort;
    }

    // random sorting
    shuffle($orte);
    print_r($orte);

    // sorting low to high
    sort($orte);
    print_r($orte);
?>
