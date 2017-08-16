<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Date: 03.07.2017
 * Time: 15:32
 */
?>

<?php
    // Create Array
    $farben = array('rot', 'blau', 'weiss');
    //...or...
    $farben = ['rot','blau', 'weiss'];

    // Print Key 2
    echo $farben[2];

    // print everything
    print_r($farben);

    // add a value to the end
    $farben[] = 'grün';
    foreach ($farben as $value){
       echo $value;
    }

?>
