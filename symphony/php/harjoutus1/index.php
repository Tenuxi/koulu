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
        include("osoiteTesti.php");
    ?>
</head>
<body>

<!-- header --> 

<header class="jumbotron jumbotron-fluid"><h2>Harjoitus 1</h2></header>


<!-- DIVI -->

<div id="keltainen" class="alert alert-warning">

<!-- PHP -->

    <?php

    // Osoite OLIOT!
    $osoite1 = new Osoite();
    $osoite2 = new Osoite();

    //Määritetään osoiteet
    $osoite1->setLahiosoite("Keltainenkatu");
    $osoite1->setPostinumero("00430");
    $osoite1->setPostitoimipaikka("Helsinki");


    $osoite2->setLahiosoite("Maantie");
    $osoite2->setPostinumero("04522");
    $osoite2->setPostitoimipaikka("Jyväskylä");

    
       

    //Tulostetaan
    echo $osoite1->getLahiosoite() . ", " . $osoite1->getPostinumero() . ", " . $osoite1->getPostitoimipaikka() .  "<br>";
    echo $osoite2->getLahiosoite() . ", " . $osoite2->getPostinumero() . ", " . $osoite2->getPostitoimipaikka() .  "<br>";
    ?>
    
</div>


</body>
</html>