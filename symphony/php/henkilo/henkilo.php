<?php


// Tehty luokka HENKILO
class Henkilo{
    // Julkista muuttujaa voidaan kutsua luokan ulkopuolelta (VAR tai PUBLIC)
    public $nimi;

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