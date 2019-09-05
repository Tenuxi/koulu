<?php

$page=isset($_GET['page'])?$_GET['page']:'aloitus';
require("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Akronim|Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Verkkokauppa harjoitus</title>
</head>
<body>

<header>
<img src="img/logo.png" id="logo" alt="logo"><h1>Hedelmä Pörssi</h1>
</header>

<div class="keski">
    <nav>
        <ul>
            <li><a href="<?php echo "?page=aloitus"; ?>">Etusivu</a></li>
            <li><a href="<?php echo "?page=tuotteet"; ?>">Verkkokauppa</a></li>
            <li><a href="<?php echo "?page=palaute"; ?>">Palaute</a></li>
        </ul>
    </nav>

    

    <main>
    
    <?php 
        
        if($page=="aloitus"){
            include("aloitus.php");
        }
        if($page=="tilaus") {
            include("tilaus.php");
        }
        if($page=="tuotteet") {
            include("tuotteet.php");
        }
        if($page=="tuote_kasittelija") {
            include("tuote_kasittelija.php");
        }
        if($page=="palaute") {
            include("palaute.php");
        }
        if($page=="kasittelija") {
            include("kasittelija.php");
        }
        if($page=="tilattu") {
            include("tilattu.php");
        }
        if($page=="testi") {
            include("testi.php");
        }
        
    ?>
    
    </main>

    <div class="mainos">
    <img src="img/paaryna.png" id="mainoskuva" alt="Mainos kuva1">
    <br>
    <p><b>Viikon tarjous!</b></p>
    <img src="img/mansikka.png" id="mainoskuva" alt="Mainos kuva2">
    <br>
    <p><b>Päivän tarjous!</b></p>
    </div>


</div>

<footer>
<h2>Copyright - Joonas 2019</h2>
</footer>
    


</body>
</html>