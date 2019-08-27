<?php


class oppilasLuokka
{


    public $etunimi;
    public $sukunimi;
    public $osoite;
    public $email;



    private $opiskelijanumero;




    public function __construct($opiskelijanumero, $etunimi, $sukunimi, $osoite, $email)
    {
        $this->etunimi = $etunimi;
        $this->sukunimi = $sukunimi;
        $this->osoite = $osoite;
        $this->email = $email;
        $this->opiskelijanumero = $opiskelijanumero;
    }


    private function getOpiskelijanumero()
    {
        return $this->opiskelijanumero;
    }

    public function setOpiskelijanumero($opiskelijanumero)
    {
        $this->opiskelijanumero = $opiskelijanumero;
    }


    public function tulostaTiedot()
    {
        return "Tiedot on:" . "<br>" . "Opiskelija numero: " . $this->getOpiskelijanumero() . "<br>" . "Nimi: " .$this->etunimi . " " . $this->sukunimi . "<br>" . "Osoite: " . $this->osoite . "<br>" . "Sähköposti: " . $this->email;
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
