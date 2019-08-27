<?php

class Auto {
        public $rekisterinumero;
        public function getRekisterinumero() {
            return $this->rekisterinumero;
        }
        public function setRekisterinumero($numero) {
            $this->rekisterinumero = $numero;
        }
        public $merkki;
        public function getMerkki() {
            return $this->merkki;
        }
        public function setMerkki($merkki2) {
            $this->merkki = $merkki2;
        }
        public $malli;
        public function getMalli() {
            return $this->malli;
        }
        public function setMalli($malli2) {
            $this->malli = $malli2;
        }
        public $valmistusvuosi;
        public function getValmistusvuosi() {
            return $this->valmistusvuosi;
        }
        public function setValmistusvuosi($vuosi) {
            $this->valmistusvuosi = $vuosi;
        }
        private $tankinTilavuus;
        private function getTankinTilavuus() {
            return $this->tankinTilavuus;
        }
        public function setTankinTilavuus($tilavuus) {
            $this->tankinTilavuus = $tilavuus;
        }
        private $bensanMaara;
        private function getBensanMaara() {
            return $this->bensanMaara;
        }
        public function setBensanMaara($maara) {
            $this->bensanMaara = $maara;
        }
        public function __construct($rekisterinumero, $merkki, $malli, $valmistusvuosi, $tankinTilavuus, $bensanMaara) {
            $this->rekisterinumero = $rekisterinumero;
            $this->merkki = $merkki;
            $this->malli = $malli;
            $this->valmistusvuosi = $valmistusvuosi;
            $this->tankinTilavuus = $tankinTilavuus;
            $this->bensanMaara = $bensanMaara;
        }
        public function tulostaAutonTiedot() {
            return "AUTON TIEDOT<br>Rekisterinumero: " .$this->getRekisterinumero() ."<br>Merkki: " .$this->getMerkki() ."<br>Malli: " .$this->getMalli() ."<br>Valmistusvuosi: " .$this->getValmistusvuosi() ."<br>Tankin tilavuus: " .$this->getTankinTilavuus() ." litraa<br>Bensan määrä: " .$this->getBensanMaara() ." litraa";
        }
        public function kaynnisty() {
            return "KÄYNNISTYMINEN<br>Auto on käynnistynyt.<br>Bensan määrä: " .$this->getBensanMaara() ." litraa<br>Tankin tilavuus: " .$this->getTankinTilavuus() ." litraa";
        }
        public function lisaaBensaa() {
        }
    }


/*
class Auto
{

    //Privaattit
    private $tankinTilavuus;
    private $bensanMaara;

    //Julkiset
    public $kaynnisty;
    public $tulostaAutonTiedot;
    public $lisaaBensaa;
    public $aja;
    public $sammuta;

    public $rekisteri;
    public $merkki;
    public $malli;
    public $bensaaTankissa;


    //Auton constructori
    public function __construct($rekisteri, $merkki, $malli, $bensaaTankissa)
    {
        $this->$rekisteri = $rekisteri;
        $this->$merkki = $merkki;
        $this->$malli = $malli;
        $this->$bensaaTankissa = $bensaaTankissa;
    }


    function tulostaAutonTiedot(){
        return "Rekisteri: " . $this->getRekisteri() . "<br>" . "Merkki: " . $this->getMerkki() . "<br>" . "Malli: " . $this->getMalli() . "<br>" . "Bensaa tankissa: " . $this->getBensaaTankissa() . "/l";
    }

        
        public function getRekisteri()
        {
                return $this->rekisteri;
        }

      
        public function setRekisteri($rekisteri)
        {
                $this->rekisteri = $rekisteri;

                return $this;
        }

     
        public function getMerkki()
        {
                return $this->merkki;
        }

  
        public function setMerkki($merkki)
        {
                $this->merkki = $merkki;

                return $this;
        }

        public function getMalli()
        {
                return $this->malli;
        }

 
        public function setMalli($malli)
        {
                $this->malli = $malli;

                return $this;
        }

  
        public function getBensaaTankissa()
        {
                return $this->bensaaTankissa;
        }


        public function setBensaaTankissa($bensaaTankissa)
        {
                $this->bensaaTankissa = $bensaaTankissa;

                return $this;
        }
}

*/

?>