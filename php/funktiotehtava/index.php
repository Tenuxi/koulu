<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funktio tehtävä</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="tehtava1">

<?php

echo "KOHTA 1: <br/><br/>";


   $paaohjelmanTaulukko = luoTaulukko();

   function luoTaulukko() {
       $taulukko = array();
       while (array_sum($taulukko) < 50) {
           $taulukko[] += rand(1, 10);
       }
       return $taulukko;
   }


   function tulostaTaulukko($i) {
       echo "Alkuperäinen taulukko: ";
       echo "<pre>";
       print_r($i);
       echo "</pre>";
   }
   tulostaTaulukko($paaohjelmanTaulukko);


   function laskeSumma($i) {
       echo "Taulukon lukujen summa on: " .array_sum($i);
   }
   laskeSumma($paaohjelmanTaulukko);

   echo "<br/><br/>";



   $kerrottu_taulukko = laskeKertotaulu($paaohjelmanTaulukko, 3);

   function laskeKertotaulu($taulu, $integeri) {
       $uusitaulukko = array();
       foreach ($taulu as $arvo) {
           $uusitaulukko[] = $arvo * $integeri;
       }
       return $uusitaulukko;
   }
   echo "Alkuperäisen taulukon luvut kerrottu annetulla integerillä: ";
   echo "<pre>";
   print_r($kerrottu_taulukko);
   echo "</pre>";
   echo "<br/><br/>";


   function tulostaKahdellakerrottuna($x) {
       echo "Alkuperäisen taulukon luvut kerrottu kahdella ja tulostetaan taulukko: ";
       echo "<pre>";
       print_r($x);
       echo "</pre>";
   }
   tulostaKahdellakerrottuna(laskeKertotaulu($paaohjelmanTaulukko, 2));

   echo "<br/><br/>";


   $kerrottu_taulukko_uusi = tulostaKahdellakerrottunaUusi($paaohjelmanTaulukko);

   function tulostaKahdellakerrottunaUusi($muuttuja) {
       echo "Alkuperäisen taulukon luvut kerrottu kahdella ja echotettu: <br/>";
       foreach ($muuttuja as $arvo) {
             echo $arvo * 2;
             echo "<br/>";
       }
   }

   echo "<br/><br/>";


   $paaohjelmanTaulukko = muutaKahdellakerrotuiksi($paaohjelmanTaulukko);

   function muutaKahdellakerrotuiksi($x) {
       foreach ($x as $arvo) {
           $y[] = $arvo * 2;
           $x = array_replace($x, $y);
       }
       return $x;
   }
   echo "Alkuperäisen taulukon luvut korvattu kahdella kerrotuilla luvuilla ja tulostetaan uusi versio alkuperäisestä taulukosta: <br/>";
   echo "<pre>";
   print_r($paaohjelmanTaulukko);
   echo "</pre>";
   echo "<br/><br/>";



   echo "KOHTA 1 (kutsu kaikkia funktioita uudella taulukolla): <br/><br/>";

   $uusiMuuttuja = luoTaulukko();

   tulostaTaulukko($uusiMuuttuja);
   echo "<br/>";

   laskeSumma($uusiMuuttuja);
   echo "<br/><br/>";

   tulostaKahdellaKerrottunaUusi($uusiMuuttuja);
   echo "<br/>";

   echo "Taulukon luvut kerrottu kahdella ja korvattu alkuperäisen taulukon arvot niillä: <br/>";
   echo "<pre>";
   print_r(muutaKahdellakerrotuiksi($uusiMuuttuja));
   echo "</pre>";
   echo "<br/>";

   laskeSumma(muutaKahdellakerrotuiksi($uusiMuuttuja));
   echo "<br/><br/>";


   $randomLuku = rand(5, 1000);
   echo "Random luku väliltä 5 - 1000: " .$randomLuku ."<br/>";
   echo "Alkuperäisen taulukon luvut kerrottu randomilla integerillä (" .$randomLuku ."): ";
   echo "<pre>";
   print_r(laskeKertotaulu($uusiMuuttuja, $randomLuku));
   echo "</pre>";

?>
</div>

<div class="tehtava2">

<?php

echo "KOHTA 2: <br/><br/>";

$oppilaatTaulukko = oppilasTaulukoidenLuonti();

$listaAL = [];
$listaMO = [];

foreach($oppilaatTaulukko as $oppilas) {
    lajitteleNimi($listaAL, $listaMO, $oppilas);
}

tulosta($listaAL, 1);
echo "<br>";
tulosta($listaMO, 2);

function oppilasTaulukoidenLuonti() {
    $taulukko = array(
        "Joonas Aaltonen",
        "Janne Asimerkki",
        "Altunin Vladislav",
        "Pia Tajanen-Doumbouya",
        "Marko Tammivuori",
        "Roman Tuomisto",
        "Alex Turunen",
        "Pauliina Veijalainen",
        "Noora Wallenius",
        "Onni Salonen",
        "Laura Järvinen"
    );
    return $taulukko;
}

function lajitteleNimi(&$lista1, &$lista2, $nimi) {
    $paikka = strpos($nimi, " ");
    $sukunimi = substr($nimi, $paikka+1);
    if (preg_match("/[A-L]/", $sukunimi)) {
        $lista1[] = $sukunimi;
    } else {
        $lista2[] = $sukunimi;
    }
}

function tulosta($lista, $numero) {
    echo "Ryhmään $numero kuuluvat:". "<br>";
    foreach ($lista as $yksikko) {
        echo $yksikko . "<br>";
    }
}

?>

</div>

</body>
</html>