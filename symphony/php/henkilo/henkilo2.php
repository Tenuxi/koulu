<?php


// Tehty luokka HENKILO
class Henkilo{
    // Julkista muuttujaa voidaan kutsua luokan ulkopuolelta (VAR tai PUBLIC)
    public $nimi;

    //Yksityinen (Private) muuttuja on sellainen johon pääsee käsiksi vain luokan sisältä
    private $pinkoodi;

    //Privaattia metodia voidaan kutsua vain luokan sisältä
    //Privaatti getteri
    private function getPinkoodi(){
        return $this->pinkoodi;
    }

    //julkinen setteri
    public function setPinkoodi($pinkoodi){
        $this->pinkoodi = $pinkoodi;
    }

    //koodataan oma metodi joka tulostaa henkilön nimen ja pinkoodin
    public function tulostaHenkilo(){
        return "henkilön nimi on " . $this->getNimi() . " ja hänen pinkoodinsa on: " . $this->getPinkoodi();
    }

    // Konstruktori on luokkaan kuuluva erikoismetodi.
    // Konstruktorin avulla voidaan alustaa luokan ominaisuudet
    public function __construct($nimi){
        $this->nimi = $nimi;
    }

    // get metodin avulla voidaan hakea tietyn ominaisuuden arvo
    //juskista metodia (public) voidaan kutsua toisesta ohjelmasta
    public function getNimi(){
        //palauttaa arvon "nimi"
        return $this->nimi;
    }
    //set metodi asettaa arvon muuttujalle
    //muutettava arvo välitetään parametrinä
    public function setNimi($nimi){
        //asettaa muuttujalle nimi arvon nimi
        $this->nimi = $nimi;
    }
}

?>