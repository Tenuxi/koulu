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
    <title>Harjoitus 9</title>

    

</head>
<body>


    <!-- Header ------------------------------------------------------------------>
    <header>Harjoitus 9</header>


    <?php include("db.php"); ?>




    <!-- 95% Leveä Div ------------------------------------------------------------>


    <div id="leveaDiv" class="container-fluid">
        
    <p>INSERT INTO `taulukko` (`id`, `linkki`, `otsikko`, `kuvaus`, `avainsana`) VALUES ('1', 'http://www.mysql.com', 'MySQL-tietokannan kotisivu', 'Tietoa relaatiotietokannoista', 'mysql');</p>

    </div>





    <!-- 70% Leveä Div ------------------------------------------------------------>

    <!--- PHP KOODI ------------------------------------->
        <?php

            include("linkkiLuokka.php");

            $linkkiLuokka = new LinkkiLuokka();

            $linkkiLuokka->luoYhteysTietokantaan();

            $linkkiLuokkat = $linkkiLuokka->haeKaikkiTiedot();

        ?>


    <!-----HTML----------------------------------->

    <div id="kapeaDiv" class="container">

    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Linkki</th>
      <th scope="col">Otsikko</th>
      <th scope="col">Kuvaus</th>
      <th scope="col">Avainsana</th>
    </tr>
  </thead>
  <tbody>
        <?php

        //Tulostellaan tiedot
        foreach($linkkiLuokkat as $linkkiLuokka){
        
        //Ei saa sulkea kokonaan
        ?>
    <tr>
      <th><?php echo $linkkiLuokka['id']; ?></th>
      <td><?php echo $linkkiLuokka['linkki']; ?></td>
      <td><?php echo $linkkiLuokka['otsikko']; ?></td>
      <td><?php echo $linkkiLuokka['kuvaus']; ?></td>
      <td><?php echo $linkkiLuokka['avainsana']; ?></td>
    </tr>

        <?php
        //Suljetaan kokonaan
        }
        ?>
  </tbody>
</table>
    

    </div>




    <!-- Footer ------------------------------------------------------------------->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Template © Joonas - 2019</span>
        </div>
    </footer>


</body>
</html>