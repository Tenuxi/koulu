<?php

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
        "Noora Wallenius"
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