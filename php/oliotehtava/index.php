<?php

include("lemmikki.php");

$muuttuja = new Lemmikkielain();

$muuttuja->set_type("Koira");
$muuttuja->set_age(2);
$muuttuja->set_name("Hauva");

$muuttuja->tulostaTiedot();


$muuttuja = new Lemmikkielain();

$muuttuja->set_type("Kissa");
$muuttuja->age();
$muuttuja->age();
$muuttuja->age();
$muuttuja->age();
$muuttuja->age();
$muuttuja->age();
$muuttuja->age();
$muuttuja->set_name("Mirri");

$muuttuja->tulostaTiedot();



?>