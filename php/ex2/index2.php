<?php

header('Content-Type: text/html; charset=utf-8');

$teksti = "Hieman jännittää tämä esiintyminen, mutta antaa olla, aloitetaan. Moikka, nimeni on sonja sorvari.
Työskentelen opettajana helsinki business collegessa ja opetan pääasiassa ohjelmointikieliä html, css ja php.
Opettaminen on hauskaa, vaihtelevaa ja haastavaakin.<br><br>Harrastan lisäksi toki itse koodaamista, tällä hetkellä treenailen reactilla!!!";

$teksti = $teksti."Työnteko on ihanaa, mutta harrastaminen vielä ihanampaa!";
$teksti = trim($teksti, "Hieman jännittää tämä esiintyminen, mutta antaa olla, aloitetaan.");



$toisenlauseenpaikka = strpos($teksti, "Työskentelen");
$ensimmainenlause = substr($teksti, 0, $toisenlauseenpaikka);
$ensimmaisenlauseenpituus = strlen($ensimmainenlause);
$kolmannenlauseenpaikka = strpos($teksti, "Opettaminen");
$toisenlauseenpituus = $kolmannenlauseenpaikka - $ensimmaisenlauseenpituus;
$toinenlause = substr($teksti, $toisenlauseenpaikka, $toisenlauseenpituus);
$neljannenlauseenpaikka = strpos($teksti, "Harrastan");
$kolmaslause = substr($teksti, $kolmannenlauseenpaikka, $neljannenlauseenpaikka-$kolmannenlauseenpaikka);
$neljaslause = substr($teksti, $neljannenlauseenpaikka, $ensimmaisenlauseenpituus);
$viidennenlauseenpaikka = strpos($teksti, "Työnteko");
$viideslause = substr($teksti, $viidennenlauseenpaikka);


$eka = strpos($ensimmainenlause, "sonja");
$etunimi = substr($ensimmainenlause, $eka, 5);
$etunimi = ucfirst($etunimi);


// echo $teksti;
echo $ensimmainenlause;
echo $toinenlause;
echo $kolmaslause;
echo $neljaslause;
echo $viideslause;

?>