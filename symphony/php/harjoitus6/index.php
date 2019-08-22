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
    <title>Harjoitus 6</title>

        <?php include("matikkaTesti.php");?>

</head>
<body>



<!-- Poista ulos kommentoinnit diveistä joita haluat käyttää! -------------------->


    <!-- Header ------------------------------------------------------------------>
    <header>Harjoitus 6</header>



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
        
<pre>
Koodaa luokka Matikka, joka tarjoaa metodit seuraavien toimintojen suorittamiseksi

* muuntaa kilokalorit jouleiksi ja toisin päin

* laskea ympyrän pinta-ala

* laskea suorakulmion pinta-ala

* muuntaa Celsius-asteet Fahrenheit-asteiksi ja toisin päin.

* muuntaa radiaanit asteiksi

Etsi kaavat netistä.

Koodaa sovellus (matikkaTesti.php, jolla voit testata metodien toimintaa.

Piirrä Visiolla luokka Matikka ja sen metodit. Set- ja get-metodeja ei tarvitse lisätä luokkaan.
</pre>

    </div>




    <!-- 70% Leveä Div ------------------------------------------------------------>


    <div id="kapeaDiv" class="container">

    <?php
    
    $testi = new Matikka();
       echo "Kalorit (50) Jouleina: " .$testi->muunnaKaloritJouleiksi(50) ." (Oikea vastaus noin: 209,3 Joulea)";
       echo "<br><br>";
       echo "Joulet (600) Kaloreiksi: " .$testi->muunnaJouletKaloreiksi(600) ." (Oikea vastaus noin: 143,3 Kaloria)";
       echo "<br><br>";
       // Testataan energiamuunninta
       $kalori = 80;
       echo $testi->energiamuunnin($kalori); // toinen jää oletuksena nollaksi
       echo "<br><br>";
       // $sade = 8;
       // echo $testi->laskeYmpyranAla($sade);
       echo "Ympyrän (säde = (8) pinta-ala on: " .$testi->laskeYmpyranAla(8) ." (Oikea vastaus noin: 201,1 m2)";
       echo "<br><br>";
       // $testi->setSuorakulmionAla(12);
       // echo $testi->getSuorakulmionAla();
       echo "Suorakulmion (sivut: 3 ja 4) pinta-ala on: " .$testi->laskeSuorakulmionAla(3, 4) ." (Oikea vastaus: 12 m2)";
       echo "<br><br>";
       echo "Celsiukset (6) Fahrenheiteiksi: " .$testi->muunnaCelsiuksetFahrenheiteksi(6) ." (Oikea vastaus: 42,8 Fahrenheitia)";
       echo "<br><br>";
       echo "Fahrenheitit (59) Celsiuksiksi: " .$testi->muunnaFahrenheititCelsiuksiksi(59) ." (Oikea vastaus: 15 Celsiusta)";
       echo "<br><br>";
       echo "Radiaanit (1,57) asteiksi: " .$testi->muunnaRadiaanitAsteiksi(1.57) ." (Oikea vastaus noin: 90 astetta)";
       echo "<br><br>";

       // $testi->setSuorakulmionAla(12);
       // echo $testi->getSuorakulmionAla();
       /* LASKEE JA TALLENTAA:
       $testi->laskeSuorakulmionAla(3, 4);
       echo "Suorakulmion (3 * 4) pinta-ala on: " .$testi->getSuorakulmionAla();
       */

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