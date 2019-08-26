<?php

class Auto
{

    //Privaattit
//    private $tankinTilavuus;
//    private $bensanMaara;

    //Julkiset
//    public $kaynnisty;
    // public $tulostaAutonTiedot;
//    public $lisaaBensaa;
//    public $aja;
//    public $sammuta;

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
        return "Rekisteri: " . $this->rekisteri . "<br>" . "Merkki: " . $this->merkki . "<br>" . "Malli: " . $this->malli . "<br>" . "Bensaa tankissa: " . $this->bensaaTankissa . "/l";
    }

        /**
         * Get the value of rekisteri
         */ 
        public function getRekisteri()
        {
                return $this->rekisteri;
        }

        /**
         * Set the value of rekisteri
         *
         * @return  self
         */ 
        public function setRekisteri($rekisteri)
        {
                $this->rekisteri = $rekisteri;

                return $this;
        }

        /**
         * Get the value of merkki
         */ 
        public function getMerkki()
        {
                return $this->merkki;
        }

        /**
         * Set the value of merkki
         *
         * @return  self
         */ 
        public function setMerkki($merkki)
        {
                $this->merkki = $merkki;

                return $this;
        }

        /**
         * Get the value of malli
         */ 
        public function getMalli()
        {
                return $this->malli;
        }

        /**
         * Set the value of malli
         *
         * @return  self
         */ 
        public function setMalli($malli)
        {
                $this->malli = $malli;

                return $this;
        }

        /**
         * Get the value of bensaaTankissa
         */ 
        public function getBensaaTankissa()
        {
                return $this->bensaaTankissa;
        }

        /**
         * Set the value of bensaaTankissa
         *
         * @return  self
         */ 
        public function setBensaaTankissa($bensaaTankissa)
        {
                $this->bensaaTankissa = $bensaaTankissa;

                return $this;
        }
}

?>