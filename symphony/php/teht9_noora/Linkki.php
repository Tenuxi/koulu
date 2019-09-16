<?php

    class Linkki {

        public $id;
        public $linkki;
        public $otsikko;
        public $kuvaus;
        public $avainsana;

        // Tietokantaa varten
        private $yhteydenhallinta;

        
        public function getId() {
            return $this->id;
        }
        public function setId($id2) {
            $this->id = $id2;
        }

        public function getLinkki() {
            return $this->linkki;
        }
        public function setLinkki($linkki2) {
            $this->linkki = $linkki2;
        }

        public function getOtsikko() {
            return $this->otsikko;
        }
        public function setOtsikko($otsikko2) {
            $this->otsikko = $otsikko2;
        }

        public function getKuvaus() {
            return $this->kuvaus;
        }
        public function setKuvaus($kuvaus2) {
            $this->kuvaus = $kuvaus2;
        }

        public function getAvainsana() {
            return $this->avainsana;
        }
        public function setAvainsana($avainsana2) {
            $this->avainsana = $avainsana2;
        }

/*
        public function __construct($id, $linkki, $otsikko, $kuvaus, $avainsana) {
            $this->id = $id;
            $this->linkki = $linkki;
            $this->otsikko = $otsikko;
            $this->kuvaus = $kuvaus;
            $this->avainsana = $avainsana;
        }


        public function tulostaTiedot() {
            return "ID: " .$this->getId() ."<br>Linkki: " .$this->getLinkki() ."<br>Otsikko: " .$this->getOtsikko() ."<br>Kuvaus: " .$this->getKuvaus() ."<br>Avainsana: " .$this->getAvainsana();
        }

*/

        public function luoYhteysTietokantaan() {
            // Tämä on referenssi/viittaus luokkaan Yhteydenhallinta
            include("Yhteydenhallinta.php");
    
            // Otetaan yhteys tietokantaan
            $this->yhteydenhallinta = new Yhteydenhallinta(); // Tähän voi laittaa inin, joka ohittaa oletuksen
        }
        
    
        public function haeKaikkiLinkit() {
            // Palauttaa hakutuloksen
            return $this->yhteydenhallinta->suoritaHakuLause("SELECT * FROM linkit");
        }


        public function lisaaLinkki() {
            return $this->yhteydenhallinta->suoritaPaivitysLause("INSERT INTO linkit(id, 
            linkki, otsikko, kuvaus, avainsana) VALUES (?,?,?,?,?)", // jokaiselle oma kysymysmerkki
            Array($this->id, $this->linkki, $this->otsikko, $this->kuvaus, $this->avainsana)); 
        }

    }

?>