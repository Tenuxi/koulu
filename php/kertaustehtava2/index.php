<?php

$etunimi = array("Anniina", "Bettina", "Cecilia", "Donna", "Evelina");

$sukunimi = array("Karjalainen", "Laine", "Mankinen", "Nieminen", "Oikarinen");

function onkovokaali($kirjain) {
    if ( $kirjain == "A" || $kirjain == "E" || $kirjain == "I" || $kirjain == "O" || $kirjain == "U" || $kirjain == "Y" || $kirjain == "Ä" || $kirjain == "Ö") {
        return true;
    } else {
        return false;
    }
}

$oppilastaulukko = array(
    array(111),
    array(112),
    array(115),
    array(135),
    array(179),
);

foreach($oppilastaulukko as $key => $oppilas) {
    $randometunimi = $etunimi[rand(0, 4)];
    $randomsukunimi = $sukunimi[rand(0, 4)];
    $oppilastaulukko[$key][1] = $randometunimi;
    $oppilastaulukko[$key][2] = $randomsukunimi;

}



echo "<pre>";
print_r($oppilastaulukko);
echo "</pre>";

foreach($oppilastaulukko as $oppilas) {
    $ekakirjain = $oppilas[1][0];
    $ekakirjain2 = $oppilas[2][0];
    echo "Etunimen kirjain: " . $ekakirjain . "<br>";
    echo "Sukunimen kirjain: " . $ekakirjain2 . "<br>";
    if(!onkovokaali($ekakirjain)&& !onkovokaali($ekakirjain2)) {
        //  Jos sekä etunimi että sukunimi ovat konsonantteja, tulosta ”*järjestysnro oppilaan nimi on *nimi nimi*. Kuulostaa vaikuttavalta!”
        echo $oppilas[0] . " oppilaan nimi on " . $oppilas[1] . " " . $oppilas[2] . " Kuulostaa vaikuttavalta!<br><hr>";
    } else if(onkovokaali($ekakirjain)&& onkovokaali($ekakirjain2)) {
        //  Jos etunimi on vokaali ja sukunimi vokaali, tulosta ”*järjestysnro oppilaan nimi on *nimi nimi*. Miten kaunis nimi!”
        echo $oppilas[0] . " oppilaan nimi on " . $oppilas[1] . " " . $oppilas[2] . " Miten kaunis nimi!<br><hr>";    
    } else if(!onkovokaali($ekakirjain)&& onkovokaali($ekakirjain2)) {
        // Jos nimen etunimi on konsonantti ja sukunimi vokaali, tulosta ”*järjestysnro oppilaan nimi on *nimi nimi*. Onpas harvinainen nimi!”
        echo $oppilas[0] . " oppilaan nimi on " . $oppilas[1] . " " . $oppilas[2] . " Onpas harvinainen nimi!<br><hr>";    
    } else if(onkovokaali($ekakirjain)&& !onkovokaali($ekakirjain2)) {
        //  Jos etunimi on vokaali ja sukunimi on konsonantti, tulosta ”*järjetysnro oppilaan nimi on *nimi nimi*. Hienon kuuloinen nimi.”
        echo $oppilas[0] . " oppilaan nimi on " . $oppilas[1] . " " . $oppilas[2] . " Hienon kuuloinen nimi!<br><hr>";    
    }
    
} 



?>