<?php

$etunimi = $_POST["etunimi"];
$sukunimi = $_POST["sukunimi"];
$email = $_POST["email"];

$tietokanta = "INSERT INTO asiakas (etunimi, sukunimi, email) VALUES ('$etunimi', '$sukunimi', '$email')";

if(mysqli_query($connection, $tietokanta)){
    echo "Tilaus lähetetty! Kiitos tilauksesta.";
    
} else {
    echo "ERROR!!!!!! $tietokanta" . mysqli_error($connection);
}

?>