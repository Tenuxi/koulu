<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fontit -->
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <!-- Tyylit -->
        <!-- Bootsrtap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- .css -->
        <link rel="stylesheet" href="style.css"> <!--Tumma teema-->
        <!-- <link rel="stylesheet" href="style_vaalea.css"> --> <!--Vaalea teema-->
        

    <!-- Title ------------------------------------------------------------------>
    <title>Harjoitus 4</title>

    <?php include("oppilasTesti2.php") ?>

</head>
<body>



<!-- Poista ulos kommentoinnit diveistä joita haluat käyttää! -------------------->


    <!-- Header ------------------------------------------------------------------>
    <header>Harjoitus 4</header>



    <!-- Navigaatio -------------------------------------------------------------->

<!--
    <ul id="navigaatio">
        <li class="nav-item">
            <a class="nav-link active" href="#">Linkki 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Linkki 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Linkki 3</a>
        </li>
    </ul>
-->


    <!-- Nappit ------------------------------------------------------------------>

<!--
    <div id="napit">
        <button type="button" class="btn btn-primary">Nappi</button>
        <button type="button" class="btn btn-primary">Nappi</button>
    </div>
    -->



    <!-- Pieni "Huom" Div -------------------------------------------------------->

<!--
    <div id="huomautus" class="alert alert-danger" role="alert">
        
    </div>
-->



    <!-- 95% Leveä Div ------------------------------------------------------------>


    <div id="leveaDiv" class="container-fluid">
        <pre>Lisää Oppilas luokkaan uusi yksityinen (private) ominaisuus

* opiskelijanumero

Muokkaa Oppilas luokan konstruktoria lisäämällä siihen uusi parametri $opiskelijanro, 
sekä lisäämällä julkinen set-metodi opiskelijanumero muokkaamista varten ja yksityinen get-metodi, jota muut metodit voivat käyttää.

Lisää vielä Oppilas-luokkaan julkinen metodi tulostaOppilas, joka palauttaa oppilaan kaikki tiedot mukaan lukien hänen opiskelijanumeronsa.

Koodaa sovellus (oppilasTesti2.php), joka tulostaa oppilaiden tiedot tulostaOppilas-metodin avulla.

Muuta sitten set-metodin avulla oppilaan opiskelijanumroa ja tulosta hänen tietonsa uudelleen
</pre>


    </div>




    <!-- 70% Leveä Div ------------------------------------------------------------>


    <div id="kapeaDiv" class="container">

    <?php
        
        $jaska = new oppilasLuokka(123123, "Jaska", "Jokunen", "Kannelmaki 2 a 4, Helsinki", "jaska.jokunen@email.com");
        $jonna = new oppilasLuokka(0002340, "Jonna", "Jokunen", "Kannelmaki 2 a 4, Helsinki", "jonna.jokunen@email.com");


        echo "<h3>Alkuperäinen tulostus</h3>";
        echo $jaska->tulostaTiedot();
        echo "<br> <hr> <br>";
        echo $jonna->tulostaTiedot();
        echo "<br> <br> <br>";
        echo "<h3>Muutettu numero</h3>";

        $jaska->setOpiskelijanumero(456789);
        $jonna->setOpiskelijanumero(332332);

        echo $jaska->tulostaTiedot();
        echo "<br> <hr> <br>";
        echo $jonna->tulostaTiedot();

    ?>

    </div>




    <!-- Footer ------------------------------------------------------------------->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Template © Joonas - 2019</span>
        </div>
    </footer>


<!-- JS yms. -->


<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->


</body>
</html>