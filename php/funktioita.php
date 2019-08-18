<?php

$paaohjelmanTaulukko = luoTaulukko();
tulostaTaulukko($paaohjelmanTaulukko);
muutaKahdellaKerrotuksi($paaohjelmanTaulukko);
tulostaTaulukko($paaohjelmanTaulukko);

function luoTaulukko() {
    $taulukko = array();
    $summa = 0;
    while ($summa <= 50) {
        $luku = rand(1,10);
        $taulukko[] = $luku;
        $summa = $summa + $luku;
    }
    return $taulukko;
}

function tulostaTaulukko($taulukko) {
    foreach ($taulukko as $yksikko) {
        echo $yksikko . "<br>";
    }
}

function laskeSumma($taulukko) {
    $summa = 0;
    foreach ($taulukko as $yksikko) {
        $summa = $summa + $yksikko;
    }
    return $summa;
}

function laskeKertotaulu($taulukko, $luku) {
    $uusitaulukko = array();
    foreach ($taulukko as $yksikko) {
        $uusitaulukko[] = $yksikko * $luku;
    }
    return $uusitaulukko;

}

function tulostaKahdellaKerrottuna($taulukko) {
    foreach ($taulukko as $yksikko) {
        echo $yksikko*2;
    }
}

function muutaKahdellaKerrotuksi(&$taulukko) {
    foreach ($taulukko as $key => $yksikko) {
        $taulukko[$key] = $yksikko*2;
    }
}

?>