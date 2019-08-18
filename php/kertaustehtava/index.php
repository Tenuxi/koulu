<?php

$taulukko = array();


// i = indexi
// random = luku

// parillinen ( % 2 == 0  )
// pariton ( % 2 == 1 )

for($i = 0; $i < 10; $i++) {
    $random = rand(1, 50);
    echo "random numero" . $random . "<br>";

    //jos luku on parillinen ja läpikäytävä indeksi on myös parillinen, kerro numero sadalla
    if($random % 2 == 0 && $i %2 == 0) {
        $random = $random * 100;
    //jos luku on parillinen ja indeksi partion, miinusta luvusta 2x sen arvo
    } else if($random %2 == 0 && $i %2 == 1) {
        $random = $random - $random * 2;
    //jos luku on partion ja indeksi on parillinen, jaa numero sadalla
    } else if($random % 2 == 1 && $i %2 == 0) {
        $random = $random / 100;
    //jos luku on partion ja indeksi on partion, miinusta siitä 2x oma arvonsa ja jaa tämän jälkeen sadalla
    } else if($random % 2 == 1 && $i %2 == 1) {
    $random = ($random - $random * 2) / 100;
    }

    $taulukko[$i] = $random;
}
echo "<pre>";
print_r($taulukko);
echo "</pre>";

// Järjestä numerot suuruusjärjestykseen suurimmasta pienimpään
arsort($taulukko);


echo "<pre>";
print_r($taulukko);
echo "</pre>";


//väri laatikot numeroiden perusteella
foreach($taulukko as $arvo) {
    if($arvo < -1) {
        echo "<div style='background-color: blue; height: 20px; width: 20px;'></div><br>";
    } else if($arvo > -1 && $arvo < 0) {
        echo "<div style='background-color: red; height: 20px; width: 20px;'></div><br>";
    } else if($arvo > 0 && $arvo < 1) {
        echo "<div style='background-color: yellow; height: 20px; width: 20px;'></div><br>";
    } else if ($arvo > 1) {
        echo "<div style='background-color: green; height: 20px; width: 20px;'></div><br>";
    }
}





?>