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
        include("henkilo.php");
    ?>
</head>
<body>

<!-- header --> 

<header class="jumbotron jumbotron-fluid"><h2>Henkilö testi</h2></header>

<?php echo "toimii"; ?>

<!-- DIVIT -->

<div id="keltainen" class="alert alert-warning">

<!-- PHP -->

    <?php


        // Luodaan henkilo luokasta ilmentyma "Jokke" (Jokke on olio!)
        // olio (Jokke) tallennetaan palvelimen muistiin
        $jokke = new Henkilo();

        //Luodaan toinen olio (Liisa)
        $liisa = new Henkilo();

        //Annetaan olioille nimet
        $jokke->setNimi("Jokke Jokikunnas");
        $liisa->setNimi("Liisa Lusikka");

        //olion ominaisuuksiin pääsee kiinni GET metodilla koska se on julkinen
        echo "<br>";
        echo "<b>Joken kokonimi on: </b>" . $jokke->getNimi();
        echo "<br><hr><br>";
        echo "<b>Lissun oikea nimi on: </b>" . $liisa->getNimi() . "<br>";
    ?>
    
</div>






</body>
</html>