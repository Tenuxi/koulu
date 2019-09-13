<?php

// Tietokantaluokka

class Yhteydenhallinta {


    // Tietokantayhteys talletetaan tähän ominaisuuteen
    private $yhteys;

    // Tietokannan tiedot on talletettu tähän ominaisuuteen
    private $konfiguraatio;


    public function __construct($konfig = 'yhteyskonfiguraatio.ini') {
        $this->konfiguraatio = $konfig;
    }


    // Avaa tietokantayhteyden
    private function avaaYhteys() {
        // Purkaa ini-tiedoston taulukoksi
        $init = parse_ini_file($this->konfiguraatio, true);

        // Alustetaan tietokannan avaamiseen liittyvät ominaisuudet/muuttujat
        $ajuri = $init['tietokanta']['ajuri'];
        $palvelin = $init['tietokanta']['palvelin'];
        $portti = $init['tietokanta']['portti'];
        $kanta = $init['tietokanta']['kanta'];
        $kayttaja = $init['tietokanta']['kayttaja'];
        $salasana = $init['tietokanta']['salasana'];
        $url = "{$ajuri}:host={$palvelin};port={$portti};dbname={$kanta}";

        // try-lohkoon tulee se koodi, joka voi aiheuttaa kriittisen virheen
        //ja catch-lohkoon hypätään, jos tulee virhe
        try {
            // Luo yhteyden tietokantaan PDO-olion avulla
            $this->yhteys = new PDO($url, $kayttaja, $salasana, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // Pauttaa tietokantayhteyden
            return $this->yhteys;
        } catch(PDOException $e) {
            // Tänne hypätään, jos tulee virhe
            echo $e->getMessage();
            // Siirrytään virhesivulle
            header("Location: virhe.php");
        }
    }


    // Suorittaa SQL-kyselyjä
    public function suoritaHakuLause($sqlLause, $parametritaulukko = Array()) {
        // Avataan tietokantayhteys
        $this->avaaYhteys();

        // Valmistellaan hakukysely
        $suoritettavaLause = $this->yhteys->prepare($sqlLause);

        // Liitetään parametritaulukon arvot merkityn parametrin tilalle 
        // ja suoritetaan kysely
        $suoritettavaLause->execute($parametritaulukko);

        // Haetaan tulostaulukko ja suljetaan yhteys
        $tulosjoukko = $suoritettavaLause->fetchAll(PDO::FETCH_ASSOC);

        // Suljetaan yhteys
        $this->suljeYhteys();

        // Palautetaan tulosjoukko (kutsuvalle ohjelmalle)
        return $tulosjoukko;
    }

    
    // Metodia kutsutaan, kun suoritetaan lisäys (insert), poisto (delete) tai päivitys (update)
    public function suoritaPaivitysLause($sqlLause, $parametritaulukko = Array()) {
        // avaa tietokantayhteys
        $this->avaaYhteys();

        try {
            // Valmistellaan SQL-lause
            $suoritettavaLause = $this->yhteys->prepare($sqlLause);
            // Suoritetaan SQL-lause palvelimella
            $suoritettavaLause->execute($parametritaulukko);

            // Palauttaa tietueiden määrän (0 = ei tietuetta)
            $lkm = $suoritettavaLause->rowCount();

            // Suljetaan tietokantayhteys
            $this->suljeYhteys();

        } catch(PDOException $e) {
            // Jos tuli virhe, asetetaan tietueiden määrä nollaksi
            $lkm = 0;
        }
        // Palautetaan tietueiden ($lkm) määrä
        return $lkm;
    }


    private function suljeYhteys() {
        $this->yhteys = null;
    }

}

?>