<?php

    // Osoite luokka
    class Osoite{
        //Lähiosoite
        public $lahiosoite;

        public function getLahiosoite(){
            return $this->lahiosoite;
        }

        public function setLahiosoite($osoite){
            $this->lahiosoite = $osoite;
        }

         //Postinumero
         public $numero;

         public function getPostinumero(){
             return $this->numero;
         }
 
         public function setPostinumero($pNumero){
             $this->numero = $pNumero;
         }

          //Postitoimipaikka
        public $postitoimipaikka;

        public function getPostitoimipaikka(){
            return $this->postitoimipaikka;
        }

        public function setPostitoimipaikka($pToimipaikka){
            $this->postitoimipaikka = $pToimipaikka;
        }
    }

    

?>
