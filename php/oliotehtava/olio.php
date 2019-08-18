<?php

class Lemmikkielain {
    var $nimi;
    var $ika;

    function get_name() {
        return $this->nimi;
    }
    function get_age() {
        return $this->ika;
    }
    function set_name($nimi) {
        $this->nimi = $nimi;
    }
    function age() {
        $this->ika++;
    }
}

?>