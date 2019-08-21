<?php

    class LinkkiLuokka {

        //Muuttujat
        public $id;
        public $linkki;
        public $otsikko;
        public $kuvaus;
        public $avainsana;

        public function __construct($id, $linkki, $otsikko, $kuvaus, $avainsana){
            $this->id = $id;
            $this->linkki = $linkki;
            $this->otsikko = $otsikko;
            $this->kuvaus = $kuvaus;
            $this->avainsana = $avainsana;
        }

            
        

        function tulostaTiedot(){
            return "id = " . $this->id . "<br>" . "linkki = " . $this->linkki . "otsikko = " . $this->otsikko . "<br>" . "kuvaus = " . $this->kuvaus . "<br>" . "avainsana = " . $this->mysql;
 
        }

    }

?>