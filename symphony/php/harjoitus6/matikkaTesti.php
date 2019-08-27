<?php
   class Matikka {
       public function muunnaKaloritJouleiksi($kalorit) {
           return $kalorit * 4.1868;
       }
       public function muunnaJouletKaloreiksi($joulet) {
           return $joulet / 4.1868;
       }
       // Näin voi laskea molemmat: (Funktiota kutsuttaessa annetaan vaan toinen arvoista/parametreista ja toinen jää nollaksi)
       public function energiamuunnin ($kalori = 0, $joule = 0) {
           if ($kalori == 0) {
               return $joule / 4.1868;
           } else if ($joule == 0) {
               return $kalori * 4.1868;
           } else {
               echo "Joku meni pieleen";
           }
       }
       public $ympyranAla;
       // Ympyrän pinta-ala: A = pii (3,14159...) * r2 (r = säde, potenssiin 2)
       public function getYmpyranAla() {
           return $this->ympyranAla;
       }
       public function setYmpyranAla($Ala2) {
           $this->ympyranAla = $Ala2;
       }
       public function laskeYmpyranAla($sade) {
           return pi() * ($sade * $sade);
       }
       public $suorakulmionAla;
       public function getSuorakulmionAla() {
           return $this->suorakulmionAla;
       }
       public function setSuorakulmionAla($Ala) {
           $this->suorakulmionAla = $Ala;
       }
       public function laskeSuorakulmionAla($x, $y) {
           return $x * $y;
       }
       /* LASKEE JA TALLENTAA:
       public function laskeSuorakulmionAla($x, $y) {
           $muuttujaAla = $x * $y;
           $this->setSuorakulmionAla($muuttujaAla);
       }
       */
       public $fahrenheit;
       public function getFahrenheit() {
           return $this->fahrenheit;
       }
       public function setFahrenheit($f) {
           $this->fahrenheit = $f;
       }
       public function muunnaCelsiuksetFahrenheiteksi($celsiukset) {
           return (($celsiukset + 40) * 1.8) - 40;
       }
       public $celsius;
       public function getCelsius() {
           return $this->celsius;
       }
       public function setCelsius($c) {
           $this->celsius = $c;
       }
       public function muunnaFahrenheititCelsiuksiksi($fahrenheitit) {
           return (($fahrenheitit + 40) / 1.8) - 40;
       }
       public $asteet;
       public function getAsteet() {
           return $this->asteet;
       }
       public function setAsteet($asteet2) {
           $this->asteet = $asteet2;
       }
       public function muunnaRadiaanitAsteiksi($radiaanit) {
           return 360 * ($radiaanit / (2 * pi()));
       }
   }
?>