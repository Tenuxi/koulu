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
        <!-- <link rel="stylesheet" href="style.css"> --> <!--Tumma teema-->
        <link rel="stylesheet" href="style_vaalea.css"> <!--Vaalea teema-->
        

    <!-- Title ------------------------------------------------------------------>
    <title>Harjoitus pohja</title>

    <?php include("oppilasTesti.php"); ?>

</head>
<body>



<!-- Poista ulos kommentoinnit diveistä joita haluat käyttää! -------------------->


    <!-- Header ------------------------------------------------------------------>
    <header>Harjoitus 3</header>



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

<!--
    <div id="leveaDiv" class="container-fluid">
        


    </div>
-->



    <!-- 70% Leveä Div ------------------------------------------------------------>


    <div id="kapeaDiv" class="container">

        <!-- PHP ------------------------------------------------------------------>

        <?php
        
        $jaska = new oppilasLuokka("Jaska", "Jokunen", "Kannelmaki 2 a 4, Helsinki", "jaska.jokunen@email.com");
        $jonna = new oppilasLuokka("Jonna", "Jokunen", "Kannelmaki 2 a 4, Helsinki", "jaska.jokunen@email.com");



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