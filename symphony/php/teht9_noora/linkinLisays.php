<link rel="stylesheet" href="css/signin.css">

<?php
    
    include('navbar/navbar.php');

    // Referenssi/viittaus Linkki-olioon
    include ("Linkki.php");

    // Luodaan Linkki-olio
    $linkki = new Linkki();

    // Asetetaan lomakkeelta tulleet tiedot muuttujiin
    $linkki->setId($_POST['id']);
    $linkki->setLinkki($_POST['linkki']);
    $linkki->setOtsikko($_POST['otsikko']);
    $linkki->setKuvaus($_POST['kuvaus']);
    $linkki->setAvainsana($_POST['avainsana']);


    // Pyydetään Linkki-oliota otaamaan yhteys tietokantaan
    $linkki->luoYhteysTietokantaan();

    // Pyydetään Linkki-oliota lisäämään tietue
    $lisaysOK = $linkki->lisaaLinkki();


    if($lisaysOK > 0) {
        echo "Lisäys onnistui.";
    } else {
        echo "Lisäys epäonnistui!";
    }


?>