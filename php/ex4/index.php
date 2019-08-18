<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>REGEXPIT & LOOPIT</title>
</head>
<body>
    <header>REGEXPIT & LOOPIT</header>

    
    <div class="flexi">
        <?php

            $taulukko = array (
                "tuote1" => ["1", "<h1>Ablessiini</h1> ", "<b>1e/kg</b> ", "Appelsiini on appelsiinipuun (Citrus sinensis) hedelmä. Kasvitieteessä appelsiinin hedelmä määritellään marjaksi, koska se on pehmeäkuorinen, mehevä hedelmä.

                Appelsiini on pyöreä, ja muiden sitrushedelmien tavoin se on jakautunut useampaan lohkoon. Kypsät appelsiinit ovat hyviä C-vitamiinin lähteitä.
                
                Appelsiinit ovat yleensä oransseja. Appelsiini onkin joissain kielissä antanut nimensä oranssille värille. Värinnimi tulee alun perin ranskan sanasta orange, joka merkitsee sekä appelsiinia että sen väriä.[1] Muutamat lajikkeet ovat kuitenkin sisältä punaisia, ja niitä sanotaan veriappelsiineiksi."],
                "tuote2" => ["2", "<h1>banaana</h1> ", "<b>2e/kg</b> ", "Banaani (Musa sapientum)[1][2] on banaanien (Musa) sukuun kuuluva jalostettu hyötykasvi. Sen hedelmä on kasvitieteessä luokiteltu marjaksi[3], tarkemmin sanoen pohjushedelmäksi, ja tunnetaan yleensä ”tavallisena” tai ”kaupallisena” banaanina. Se on ruohokasvi, joka tuottaa satoa seitsemäntenä vuonna istutuksestaan."],
                "tuote3" => ["3", "<h1>meloooni</h1> ", "<b>4e/kg</b> ", "Meloni (Cucumis melo) on kurkkuihin kuuluva kasvi. Sen hedelmää kutsutaan samalla nimellä. Ravinnoksi käytettäviä lajikeryhmiä ovat muun muassa cantaloupenmeloni, verkkomeloni ja hunajameloni.[1]

                Meloni on yksivuotinen köynnös, joka kasvaa noin 1,5 metriä pitkäksi.[2]
                
                Meloni kuuluu eri sukuun kuin Citrullus-sukuun kuuluva vesimeloni. Melonit ovat yleensä vesimeloneita kiinteämpiä, ja niissä siemenet sijaitsevat hedelmän keskellä. Vesimeloneissa siemenet ovat tasaisesti jakautuneet koko hedelmälihaan.[3]
                
                Kun melonia haistelee kantaa vastapäätä hedelmän toiselta puolen, raaka meloni on lähes hajuton, kypsä taas tuoksuu hyvin voimakkaasti.[4]"],
                "tuote4" => ["4", "<h1>omppunen</h1> ", "<b>6e/kg</b> ", "Omena on omenapuun hedelmä. Erityisesti tarhaomenapuu on yksi maailman viljellyimmistä hedelmäpuista. Omena on valkeamaltoinen, syötävä hedelmä, joka on yleensä halkaisijaltaan 5–10 senttimetriä ja pyöreähkö. Omenalajikkeita on tuhansia, ja niiden väri, happamuus, koko ja muoto vaihtelevat. Lajikkeet voidaan jakaa kolmeen luokkaan käyttötarkoituksen mukaan: siiderin valmistukseen käytettävät omenat, ruoanlaittoon tarkoitetut talousomenat ja sellaisenaan syötävät jälkiruokaomenat.[1] Omenoista saa myös tehtyä hyvän piirakan."]
            );



            foreach ($taulukko as $value) {
                echo "<div class='tehtavat' id='hedelma".$value[0]."'>";
                // print_r($value[0]);
                print_r($value[1]);
                echo "<br>";
                print_r($value[2]);
                echo "<img src='img/hedelma".$value[0].".png' alt='hedelma".$value[0]."' class='hedelmankuvat' id='hedelmakuva".$value[0]."'>";
                print_r($value[3]);
                echo "</div>";
            };
                

        ?>
    </div>    

    


    
</body>
</html>