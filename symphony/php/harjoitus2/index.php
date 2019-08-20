<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Esimerkki harjoitus</title>

    <!-- Luodaan yhteys  -->
    <?php 
        include("autoTesti.php");
    ?>
</head>
<body>

<!-- header --> 

<header class="jumbotron jumbotron-fluid"><h2>Harjoitus 1</h2></header>


<!-- DIVI -->

<div id="keltainen" class="alert alert-warning">

<!-- PHP -->

    <?php


    //Oliot

    $auto1 = new Auto();

    $auto2 = new Auto();



    //Määritetään autot

    $auto1->setRekisterinumero("ABC-123");
    $auto1->setMerkki("Volvo");
    $auto1->setMalli("V60");
    $auto1->setValmistusvuosi("1990");

    $auto2->setRekisterinumero("DEF-456");
    $auto2->setMerkki("Lada");
    $auto2->setMalli("Niva");
    $auto2->setValmistusvuosi("1973");

    echo $auto1->getRekisterinumero() . ", " . $auto1->getMerkki() . ", " . $auto1->getMalli() . ", " . $auto1->getValmistusvuosi() . "<br>";
    echo $auto2->getRekisterinumero() . ", " . $auto2->getMerkki() . ", " . $auto2->getMalli() . ", " . $auto2->getValmistusvuosi();
       
    ?>
    
</div>


</body>
</html>