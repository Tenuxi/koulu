<?php

$email = $_POST["sposti"];
$nimi = $_POST["nimi"];
$viesti = $_POST["viesti"];


$tietokanta = "INSERT INTO palaute (nimi, email, viesti) VALUES ('$nimi', '$email', '$viesti')";



if(mysqli_query($connection, $tietokanta)){
    print "<div id='palaute'>" . 
            "<h2>Palaute lähetetty</h2><br>" .
            "<p><b>Lähettäjän nimi: </b> {$nimi}</p><br>" .
            "<p><b>Lähettäjän sähköposti: </b> {$email}</p><br><br>" . 
            "<p><b>Palaute: </b> {$viesti}</p>" . 
            "</div>";

} else{
    echo"ERROR: Couldnotableto execute $tietokanta. " . mysqli_error($connection);
}



?>