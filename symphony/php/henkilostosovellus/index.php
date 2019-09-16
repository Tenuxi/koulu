<?php

$page=isset($_GET['page'])?$_GET['page']:'koti';


?>

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
        <link href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet">


    <!-- Title ------------------------------------------------------------------>
    <title>Henkilöstö sovellus</title>
    

</head>
<body>



<!-- Poista ulos kommentoinnit diveistä joita haluat käyttää! -------------------->


    <!-- Header ------------------------------------------------------------------>
    <header>Henkilöstö sovellus</header>



    <!-- Navigaatio -------------------------------------------------------------->


    <?php include("navigation.php"); ?>
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

      <?php 
        if($page=="koti"){
        include("henkiloTaulu.php"); 
        }
        if($page=="lisaaHenkilo"){
          include("HenkilonSyotto.php"); 
        }
        if($page=="henkilonlisays"){
          include("henkilonLisays.php"); 
        }
      ?>

    </div>




    <!-- Footer ------------------------------------------------------------------->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Template © Joonas - 2019</span>
        </div>
    </footer>


<!-- JS yms. -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>


<script>

$(document).on('click', '.muuta-object', function() {
     let id = $(this).attr('muuta-id');
     bootbox.confirm({
       message: "<h4 id='teksti'>Oletko varma?</h4>",
       buttons: {
         confirm: {
           label: '<i class="fas fa-check"></i> Jatka',
           className: 'btn-primary'
         },
         cancel: {
           label: '<i class="fas fa-arrow-left"></i> Palaa',
           className: 'btn-danger'
         }
       },
       callback: function(result) {
         if (result == true) {
           let url = "muutaHenkilo.php?id=" + id;
           $(location).attr('href', url);
         }
       }
     })
   })

   $(document).on('click', '.poista-object', function() {
     let id = $(this).attr('muuta-id');
     bootbox.confirm({
       message: "<h4 id='teksti'>haluatko varmasti poistaa?</h4>",
       buttons: {
         confirm: {
           label: '<i class="fas fa-user"></i>',
           className: 'btn-primary'
         },
         cancel: {
           label: 'Peruuta',
           className: 'btn-danger'
         }
       },
       callback: function(result) {
         if (result == true) {
           let url = "poistaHenkilo.php?id=" + id;
           $(location).attr('href', url);
         }
       }
     })
   })
</script>

</body>
</html>