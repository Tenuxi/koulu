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
            return "id = " . $this->id . "<br>" . "linkki = " . $this->linkki . "<br>" . "otsikko = " . $this->otsikko . "<br>" . "kuvaus = " . $this->kuvaus . "<br>" . "avainsana = " . $this->avainsana;
 
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of linkki
         */ 
        public function getLinkki()
        {
                return $this->linkki;
        }

        /**
         * Set the value of linkki
         *
         * @return  self
         */ 
        public function setLinkki($linkki)
        {
                $this->linkki = $linkki;

                return $this;
        }

        /**
         * Get the value of otsikko
         */ 
        public function getOtsikko()
        {
                return $this->otsikko;
        }

        /**
         * Set the value of otsikko
         *
         * @return  self
         */ 
        public function setOtsikko($otsikko)
        {
                $this->otsikko = $otsikko;

                return $this;
        }

        /**
         * Get the value of kuvaus
         */ 
        public function getKuvaus()
        {
                return $this->kuvaus;
        }

        /**
         * Set the value of kuvaus
         *
         * @return  self
         */ 
        public function setKuvaus($kuvaus)
        {
                $this->kuvaus = $kuvaus;

                return $this;
        }

        /**
         * Get the value of avainsana
         */ 
        public function getAvainsana()
        {
                return $this->avainsana;
        }

        /**
         * Set the value of avainsana
         *
         * @return  self
         */ 
        public function setAvainsana($avainsana)
        {
                $this->avainsana = $avainsana;

                return $this;
        }
    }

?>