<?php

class Lemmikkielain {
    var $nimi;
    var $tyyppi;
    var $ika = 0;

    function get_name() {
        return $this->nimi;
    }
    function get_age() {
        return $this->ika;
    }
    function get_type() {
        return $this->$tyyppi;
    }
    function set_type($tyyppi) {
        $this->tyyppi = $tyyppi;
    }
    function set_name($nimi) {
        $this->nimi = $nimi;
    }
    function set_age($ika) {
        $this->ika = $ika;
    }
    function age() {
        $this->ika++;
    }

    function tulostaTiedot() {
        echo "Lemmikkieläin<br>";
        echo "Nimi: " . $this->nimi . "<br>";
        echo "Tyyppi: " . $this->tyyppi . "<br>";
        echo "Ika: " . $this->ika . "<br>";
        echo "<br><hr>";
    }
}

?>