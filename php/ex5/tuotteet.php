

<?php


$tuote = "SELECT tyyppi, kuvaus, hinta, id_tuote FROM TUOTE";

$tulos= mysqli_query($connection, $tuote);


print "<form id='tuote_kasittelija' action='index.php?page=tuote_kasittelija' method='post'>";

while ($hakija = mysqli_fetch_array($tulos)) {

    $value = $hakija['kuvaus'] . ", " . $hakija['hinta'] . " €/kg";
    
    print "<div id='tuotediv'>" . 
        "<tr>" . 
        "<td><h2>{$hakija['kuvaus']}</h2></td><br>" .
        "<td><img src='img/{$hakija['kuvaus']}.png' id='tuotekuva'></td><br>" .
        "<td>{$hakija['hinta']}€/kg </td>" .
        "<input type='checkbox' id='valinta' name='valinta[]' value='{$value}'> Lisää koriin" .
        "</tr> <br> </div>";
    
}


print "</form>";

print "<button id='tilaa_nappi' form='tuote_kasittelija' name='valinta[]' type='submit'>Lähetä tilaus</button>";


/* VERSIO

print "<form id='tuote_kasittelija' action='index.php?page=tuote_kasittelija' method='post'>";

while ($hakija = mysqli_fetch_array($tulos)) {

    $value = $hakija['kuvaus'] . ", " . $hakija['hinta'] . " €/kg";
    
    print "<div id='tuotediv'>" . 
        "<tr>" . 
        "<td><h2>{$hakija['kuvaus']}</h2></td><br>" .
        "<td><img src='img/{$hakija['kuvaus']}.png' id='tuotekuva'></td><br>" .
        "<td>{$hakija['hinta']}€/kg </td>" .
        "<input type='checkbox' id='valinta' name='check_list[]' value='{$value}'> Lisää koriin" .
        "</tr> <br> </div>";
    
}


print "</form>";

print "<button id='tilaa_nappi' form='tuote_kasittelija' name='check_list[]' type='submit'>Lähetä tilaus</button>";


*/




/* TOIMIVA

while ($hakija = mysqli_fetch_array($tulos)) {

    print "<div id='tuotediv'>" . 
        "<tr>" . 
        "<td><h2>{$hakija['kuvaus']}</h2></td><br>" .
        "<td><img src='img/{$hakija['kuvaus']}.png' id='tuotekuva'></td><br>" .
        "<td>{$hakija['hinta']}€/kg </td>" .
        "<input type='checkbox' value='nappi'> Lisää koriin" .
        "</tr> <br> </div>";
}


*/








////// SQL -> INSERT INTO `toimittaja`(`id_toimittaja`, `nimi`,`paikkakunta`) VALUES (1, 'Pohjoinen toimittaja', 'Rovaniemi');
/// INSERT INTO `tuote`(`hinta`, `id_tuote`,`kuvaus`, `toimittaja_id`, `tyyppi`) VALUES (1, '', '', '', '');

/// "<td>($row['tyyppi'])</td>" .
//// "<td>($row['kuvaus'])</td>" .


///// <link rel="stylesheet" href="tuotteet.css">

?>
