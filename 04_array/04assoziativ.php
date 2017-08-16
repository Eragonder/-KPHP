<?php
/**
 * Created by PhpStorm.
 * Autor: Alex
 * Date: 04.07.2017
 * Time: 09:29
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Einfaches HTML Grundgerüst</title>
    <meta charset="utf-8" >
    <meta name="description" content= "Assoziatives Array">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Assoziatives Array</h1>
    <?php


        //$person['Name'] = "Deubelbeiss";
        //$person['Vorname'] = "Isabella";
        //$person['Ort'] = "Altstetten";

        $person = array(
            'name' => 'Hans Muster',
            'adresse' => 'Strasse 123',
            'ort'  =>    'Zürich'
        );

        // Mehrdimonsional
        $addressbuch = array(
            array(
                'name' => 'Ueli Muster',
                'adresse' => 'Strasse 123',
                'ort'       => 'Zürich'
            ),
            array(
                'name' => 'Andy Muster',
                'adresse' => 'Strasse 123',
                'ort'       => 'Zürich'
            ),
            array(
                'name' => 'Lol Rutschmann',
                'adresse' => 'Strasse 123',
                'ort'       => 'Zürich'
            )
        );
        //echo $addressbuch [0]
        print_r($addressbuch);
        foreach($person as $key => $value) {
            echo 'Key=' . $key . ', Value=' . $value;
            echo '<br>';
        }

    ?>
