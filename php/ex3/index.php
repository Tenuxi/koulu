<?php

header('Content-Type: text/html; charset=utf-8');


$parittomat = array("1", "3", "5", "7", "9");
$parilliset = array("2", "4", "6", "8", "10");
$kaikkinumerot = array();

for ($i = 0; $i < 5; $i++) {
    $kaikkinumerot[] = $parittomat[$i];
    $kaikkinumerot[] = $parilliset[$i];
}


function tulosta() {
    $opiskelijat = [
    "viivi" => ["viivi", "10op"],
    "venla" => ["venla", "5op"],
    "ville" => ["ville", "3op"],
    "vesa" => ["vesa", "7op"],
    "veikko" => ["veikko", "6op"]
    ];

    foreach ($opiskelijat as $opiskelijannimi => $arvo) {
        if ($arvo[1] > 5) {
            echo "Henkilöllä " . $opiskelijannimi . " on yli 5 opintopistettä<br>";
        } else if ($arvo[1] < 5) {
            echo "Henkilöllä " . $opiskelijannimi . " on alle 5 opintopistettä<br>";
        } else  {
            echo "Henkilöllä " . $opiskelijannimi . " on 5 opintopistettä<br>";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taulukko tehtävä</title>

    <style>
        body {
            background-color: #000000;
        }

        .divit {
            background-color: #ffffff;
            width: 70%;
            margin-top: 15px;
            margin-left: 15%;
            margin-bottom: 15px;
            border-radius: 12px;
            padding: 20px;
        }

        #tehtavat {
            webkit-box-shadow: inset 0px 6px 15px 10px rgba(0,121,158,1);
            moz-box-shadow: inset 0px 6px 15px 10px rgba(0,121,158,1);
            box-shadow: inset 0px 6px 15px 10px rgba(0,121,158,1);
        }

        #tehtavananto {
            webkit-box-shadow: 0px 11px 15px 17px rgba(0,121,158,1);
            moz-box-shadow: 0px 11px 15px 17px rgba(0,121,158,1);
            box-shadow: 0px 11px 15px 17px rgba(0,121,158,1);
        }

    </style>

</head>
<body>

    <div id="tehtavat" class="divit">

    <h1>Tehtävä 1</h1>
    <br>
    <?php
    print_r($parittomat);
    echo "<br>";
    print_r($parilliset);
    echo "<br>";
    print_r($kaikkinumerot);
    ?>

    <h1>Tehtävä 2</h1>
    <br>
    <?php
    tulosta();
    ?>
    </div>


    <div id="tehtavananto" class="divit">
        <pre>TAULUKKOTEHTÄVIÄ

1. Numerotaulukot

Luo järjestetty taulukko $parittomat numeroista 1, 3, 5, 7, 9 ja tulosta sen kaikki arvot.
Tulosta seuraavalle riville uusi taulukko $parilliset arvoilla 2, 4, 6, 8 ja 10.
Luo kolmas taulukko $kaikkinumerot, johon kopioit arvot oikeassa järjestyksessä
kahdesta ensimmäisestä taulusta. Tulosta taulukko.

2. Assosiaatiotaulukot ja IFFITTELY

Luo assosiaatiotaulukko, jossa käsittelet opiskelijoiden opintopistemääriä.
Assosiaatiotaulukossa tulisi olla avain ja jokaisella
avaimella arvona oma taulukkonsa. Näistä taulukoista tulisi löytyä seuraavat tiedot:
- Viivi 10op
- Venla 5op
- Ville 3op
- Vesa 7op
- Veikko 6op
Poimi taulukosta vuorollaan jokainen arvo ja tulosta
”Henkilöllä Nimi on yli 5 opintopistettä”/”Henkilöllä Nimi on 5
opintopistettä”/”Henkilöllä Nimi on alle 5 opintopistettä” totuuden mukaan. :)
Nimen tilalle laita henkilön oikea nimi.</pre>
    </div>

</body>
</html>