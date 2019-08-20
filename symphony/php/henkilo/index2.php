<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Esimerkki harjoitus</title>

    <!-- Luodaan yhteys henkilo.php hen (henkilo luokkaan) -->
    <?php 
        include("henkilo2.php");
    ?>
</head>
<body>

<!-- header --> 

<header class="jumbotron jumbotron-fluid"><h2>Henkilö testi</h2></header>

<?php echo "toimii"; ?>

<!-- DIVIT -->



<div id="keltainen" class="alert alert-danger">


    <?php
        // Luodaan Henkilo-luokasta ilmentymä/olio Kaija
        $kaija = new Henkilo("Kaija Kokkonen");
        // Tulostetaan Kaijan koko nimi
        print("Kaijan koko nimi on " .$kaija->getNimi() ."<br>");

        //Lisätään pinkoodi kaijalle
        $kaija->setPinkoodi("0003");

        //Printtaillaan kaijan tiedot
        echo $kaija->tulostaHenkilo();
        

        
    ?>
    
</div>




</body>
</html>