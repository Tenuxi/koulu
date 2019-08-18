<?php

for ($i = 0; $i < 10; $i++) {
    echo "Arvo on nyt: " . $i;
    echo "<br>";
}

echo "<br><br>";



$taulukko = array("ville", "vilho", "pekka", "sanna");

foreach ($taulukko as $nimi) {
    echo "Nimi on: " . $nimi ."<br>";
}

echo "<br><br>";



$numero = 10;
while ($numero != 0) {
    echo "numero on " . $numero . "<br>";
    $numero--;
}

echo "<br><br>";



$numero = 10;
do {
    echo "numero on " . $numero . "<br>";
    $numero--;
} while ($numero != 0);

echo "<br><br>";






?>