<?php


class oppilasLuokka{

/*
    public $etunimi;
    public $sukunimi;
    public $osoite;
    public $email;
*/

    public function __construct($etunimi, $sukunimi, $osoite, $email){
        $this->etunimi = $etunimi;
        $this->sukunimi = $sukunimi;
        $this->osoite = $osoite;
        $this->email = $email;
    }

    public function tulostaTiedot(){
        return "Tiedot on:<br>" . "Nimi: " .$this->etunimi . " " . $this->sukunimi . "<br>" . "Osoite: " . $this->osoite . "<br>" . "Sähköposti: " . $this->email;
    }


        public function getEtunimi()
        {
                return $this->etunimi;
        }

        public function getSukunimi()
        {
                return $this->sukunimi;
        }


        public function getOsoite()
        {
                return $this->osoite;
        }


        public function getEmail()
        {
                return $this->email;
        }
}



?>