<?php

    // Osoite luokka
    class Auto{
       //Rekisterinumero
       public $rekisterinumero;

       public function getRekisterinumero(){
           return $this->rekisterinumero;
       }

       public function setRekisterinumero($rekkari){
           $this->rekisterinumero = $rekkari;
       }


       //Merkki
       public $merkki;

       public function getMerkki(){
           return $this->merkki;
       }

       public function setMerkki($Mmerkki){
           $this->merkki = $Mmerkki;
       }

       //Malli
       public $malli;

       public function getMalli(){
           return $this->malli;
       }

       public function setMalli($mAlli){
           $this->malli = $mAlli;
       }

       //Valmistusvuossi
       public $valmistusvuosi;

       public function getValmistusvuosi(){
           return $this->valmistusvuosi;
       }

       public function setValmistusvuosi($valmistusVuosi){
           $this->valmistusvuosi = $valmistuVuosi;
       }
    }

    

?>