<?php
    header('Content-Type: text/html; charset=utf-8');

    // muuttujat
    $muuttuja1 = "Hieman jännittää tämä esiintyminen, mutta antaa olla, aloitetaan. Moikka, nimeni on sonja sorvari.<br>Työskentelen opettajana helsinki business collegessa ja opetan pääasiassa ohjelmointikieliä html, css ja php.<br>Opettaminen on hauskaa, vaihtelevaa ja haastavaakin.<br><br>Harrastan lisäksi toki itse koodaamista, tällä hetkellä treenailen reactilla!!!";
    $muuttuja2 = "Työnteko on ihanaa, mutta harrastaminen vielä ihanampaa!";
    $muuttuja3 = $muuttuja1 . $muuttuja2;
    $muuttuja4 = $muuttuja1 . $muuttuja2;

    $lause1 = "Hieman jännittää tämä esiintyminen, mutta antaa olla, aloitetaan.";
    $lause2 = "Moikka, nimeni on sonja sorvari.";
    $lause3 = "Työskentelen opettajana helsinki business collegessa ja opetan pääasiassa ohjelmointikieliä html, css ja php.";
    $lause4 = "Opettaminen on hauskaa, vaihtelevaa ja haastavaakin.";
    $lause5 = "Harrastan lisäksi toki itse koodaamista, tällä hetkellä treenailen reactilla!!!";
    $lause6 = "Työnteko on ihanaa, mutta harrastaminen vielä ihanampaa!";
    $lause7 = "Harrastan mm. Frisbeegolffia ja pelailemista.";

    // erilliset sanat
    $etunimi = "sonja";
    $sukunimi = "sorvari";
    $ohjelmointi1 = "html";
    $ohjelmointi2 = "css";
    $ohjelmointi3 = "php";
    $ohjelmointi4 = "react";
    $yritykset = "business college";
    $tyossa = "Työskentelen opettajana";
    $kaupunki = "helsinki";
    $opetan = "opetan";
    $opetan2 = "Opettaminen";
    $tyonteko = "Työnteko";

    // lihavoitu muuttuja
    $etunimiiso = ucwords($etunimi);
    $sukunimiiso = ucwords($sukunimi);
    $ohjelmointiiso1 = strtoupper($ohjelmointi1);
    $ohjelmointiiso2 = strtoupper($ohjelmointi2);
    $ohjelmointiiso3 = strtoupper($ohjelmointi3);
    $ohjelmointiiso4 = strtoupper($ohjelmointi4);
    $yrityksetiso = ucwords($yritykset);
    $kaupunkiiso = ucwords($kaupunki);

    // f kohdan muuttujat
    $omaetumini = "<b>Joonas</b>";
    $omasukunimi = "<b>Aaltonen</b>";
    $opiskelen = "Opiskelen";
    $opiskelen2 = "opiskelen";
    $opiskelu = "Opiskelu";


    // muuttujan3 Isotkirjaimet
    $muuttuja3 = str_replace($etunimi, $etunimiiso, $muuttuja3);
    $muuttuja3 = str_replace($sukunimi, $sukunimiiso, $muuttuja3);
    $muuttuja3 = str_replace($kaupunki, $kaupunkiiso, $muuttuja3);
    $muuttuja3 = str_replace($ohjelmointi1, $ohjelmointiiso1, $muuttuja3);
    $muuttuja3 = str_replace($ohjelmointi2, $ohjelmointiiso2, $muuttuja3);
    $muuttuja3 = str_replace($ohjelmointi3, $ohjelmointiiso3, $muuttuja3);
    $muuttuja3 = str_replace($ohjelmointi4, $ohjelmointiiso4, $muuttuja3);
    $muuttuja3 = str_replace($yritykset, $yrityksetiso, $muuttuja3);

    // muuttujan 4 muutokset
    $muuttuja4 = str_replace($etunimi, $omaetumini, $muuttuja4);
    $muuttuja4 = str_replace($sukunimi, $omasukunimi, $muuttuja4);
    $muuttuja4 = str_replace($tyossa, $opiskelen, $muuttuja4);
    $muuttuja4 = str_replace($yritykset, $yrityksetiso, $muuttuja4);
    $muuttuja4 = str_replace($kaupunki, $kaupunkiiso, $muuttuja4);
    $muuttuja4 = str_replace($opetan, $opiskelen2, $muuttuja4);
    $muuttuja4 = str_replace($ohjelmointi1, $ohjelmointiiso1, $muuttuja4);
    $muuttuja4 = str_replace($ohjelmointi2, $ohjelmointiiso2, $muuttuja4);
    $muuttuja4 = str_replace($ohjelmointi3, $ohjelmointiiso3, $muuttuja4);
    $muuttuja4 = str_replace($ohjelmointi4, $ohjelmointiiso4, $muuttuja4);
    $muuttuja4 = str_replace($opetan2, $opiskelu, $muuttuja4);
    $muuttuja4 = str_replace($tyonteko, $opiskelu, $muuttuja4);



    /* tulostukset tehävään 1
    
    echo "<h1>Tehtävä 1.a</h1><br>";
    echo $muuttuja1;
    echo "<hr>";
    echo "<h1>Tehtävä 1.b</h1><br>";
    echo $muuttuja1 .= "<br>" .$muuttuja2;
    echo "<hr>";
    echo "<h1>Tehtävä 1.c</h1><br>";
    echo trim($muuttuja1, "Hieman jännittää tämä esiintyminen, mutta antaa olla, aloitetaan. ");
    echo "<hr>";
    echo "<h1>Tehtävä 1.d</h1><br>";
    echo $lause1 . $lause2 . "<br>" . $lause3 . "<br>" . $lause4 . "<br><br>" . $lause5 . "<br>" . $lause6;
    echo "<hr>";
    echo "<h1>Tehtävä 1.e</h1><br>";
    echo $muuttuja3;
    echo "<hr>";
    echo "<h1>Tehtävä 1.f</h1><br>";
    echo $muuttuja4 . "<br><br>" . $lause7;
    */

    // Tehtävä 2

    //lasku muuttujat
    $random_numero = mt_rand(1,100);
    $itseisarvo = abs($random_numero);
    $exponentti = pow($random_numero, 2);
    $neliojuuri = sqrt($random_numero);
    $jakojaannos = $random_numero % 2;



    // (Toimimattomat laskijat???????)
    $numeromuuttuja = sqrt($itseisarvo);
    $numeromuuttuja2 = $numeromuuttuja % 2;

    $integeri = is_int($numeromuuttuja2);
    $float = is_float($numeromuuttuja2);
    $numeerinen = is_numeric($numeromuuttuja2);
    
    $pyoristys = round($jakojaannos);



    // kolmos kohdan muuttujat

    $random_numero2 = mt_rand(190,200);
    $kertoja = $random_numero2 * 100;
    $vahennettava = $random_numero2 - 1986;
    $omasyntymavuosi = $random_numero2 - $vahennettava;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <title>PHP muuttuja harjoitus</title>

    <style>
    body {
        background-color: #000000;
        font-family: 'Josefin Sans', sans-serif;
    }

    hr {
        border: 1px solid #000000;
        box-shadow: 2px 2px 5px #000000;
    }

    .phpkoodi {
        background-color: #ffffff;
        padding: 3%;
        margin: 1%;
        border-radius: 12px;
        border: 2px solid #66E8A5;
        box-shadow: 5px 5px 10px #66E8A5;
        float: left;
        max-width: 40%;
    }

    .phpkoodi2 {
        background-color: #ffffff;
        padding: 3%;
        margin: 1%;
        border-radius: 12px;
        border: 2px solid #3E46FF;
        box-shadow: 5px 5px 10px #3E46FF;
        float: right;
        max-width: 40%;
        min-width: 40%;
    }
    </style>
</head>
<body>
    
    <div class="phpkoodi">

    <?php
    // tulostukset tehtävään 1
    echo "<h1>Tehtävä 1.a</h1><br>";
    echo $muuttuja1;
    echo "<hr>";
    echo "<h1>Tehtävä 1.b</h1><br>";
    echo $muuttuja1 .= "<br>" .$muuttuja2;
    echo "<hr>";
    echo "<h1>Tehtävä 1.c</h1><br>";
    echo trim($muuttuja1, "Hieman jännittää tämä esiintyminen, mutta antaa olla, aloitetaan. ");
    echo "<hr>";
    echo "<h1>Tehtävä 1.d</h1><br>";
    echo $lause1 . $lause2 . "<br>" . $lause3 . "<br>" . $lause4 . "<br><br>" . $lause5 . "<br>" . $lause6;
    echo "<hr>";
    echo "<h1>Tehtävä 1.e</h1><br>";
    echo $muuttuja3;
    echo "<hr>";
    echo "<h1>Tehtävä 1.f</h1><br>";
    echo $muuttuja4 . "<br><br>" . $lause7;
    ?>
    </div>

    <div class="phpkoodi2">
    
    <?php
    // tulostukset tehtävään 2
    echo "<h1>Tehtävä 2.a</h1><br>";
    echo "Arpoo sattuman varaisen numeron 1-100 väliltä: " . $random_numero;
    echo "<hr>";
    echo "<h1>Tehtävä 2.b</h1><br>";
    echo "Luvun itseisarvo: " . $itseisarvo . "<br>";
    echo "Luvun exponentti: " . $exponentti . "<br>"; 
    echo "Luvun neliöjuuri: " . $neliojuuri . "<br>"; 
    echo "Luvun jakojäännös: " . $jakojaannos . "<br>"; 
    echo "<hr>";
    echo "<h1>Tehtävä 2.c</h1><br>";

    ?>
<pre>//lasku muuttujat
    $random_numero = mt_rand(1,10);
    $itseisarvo = abs($random_numero);
    $exponentti = pow($random_numero, 2);
    $neliojuuri = sqrt($random_numero);
    $jakojaannos = $random_numero % 2; </pre>

    <?php
    echo "<hr>";
    echo "<h1>Tehtävä 2.d (EI TOIMI!)</h1><br>";
    echo "Integeriiinenenene luku: " . $integeri . "<br>";
    echo "Floataalinenenene luku: " . $float . "<br>";
    echo "Numeraalinen tai vastaava: " . $numeerinen . "<br>";
    echo "<hr>";
    echo "<h1>Tehtävä 2.d (EI TOIMI) </h1><br>";
    echo "Pyöristys: " . $pyoristys . "<br>";

    echo "<h1>Tehtävä 3.a</h1><br>";
    echo "Arpoo sattuman varaisen numeron 190-200 väliltä: " . $random_numero2;
    echo "<hr>";
    echo "<h1>Tehtävä 3.b</h1><br>";
    echo "Kertoo luvun sadalla: " . $kertoja;
    echo "<hr>";
    echo "<h1>Tehtävä 3.c</h1><br>";

    ?>
    <pre>// koodi
    $random_numero2 = mt_rand(190,200);
    $kertoja = $random_numero2 * 100;
    $vahennettava = $random_numero2 - 1986;
    $omasyntymavuosi = $random_numero2 - $vahennettava;</pre>

    <?php
    echo "<hr>";
    echo "<h1>Tehtävä 3.d</h1><br>";
    echo "Kertoo syntymävuoden: " . $omasyntymavuosi;
    echo "<hr>";

    ?>


    </div>


</body>
</html>