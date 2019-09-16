<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    

    <title>Linkkisovellus</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php include('navbar/navbar.php'); ?>

    <h1>Kaikki linkit</h1>

    <?php
        // Referenssi/viittaus Linkki-luokkaan / Luodaan yhteys Linkki-luokkaan
        include('Linkki.php');

        // Luodaan linkki-olio
        $linkki = new Linkki();

        // Pyydetään linkki-oliota ottamaan yhteys tietokantaan
        $linkki->luoYhteysTietokantaan();

        // Pyydetään linkki-oliota hakemaan kaikki linkit tietokannasta
        $linkit = $linkki->haeKaikkiLinkit();
        // echo print_r($linkit);

    ?>

    <table class="table">

      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Otsikko</th>
          <th scope="col">Linkki</th>
          <th scope="col">Avainsana</th>
          <th scope="col">Toiminnot</th>
        </tr>
      </thead>

      <tbody>
        <?php
          // Tulostetaan kaikki linkit
          foreach($linkit as $linkki) {
            $id = $linkki['id'];
        ?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $linkki['kuvaus']; ?></td>
            <td><a href="<?php echo $linkki['linkki']; ?>"><?php echo $linkki['otsikko']; ?></a></td>
            <td><?php echo $linkki['avainsana']; ?></td>
            <td><button muuta-id="<?php echo $id; ?>" class="btn btn-primary muuta-object">Muuta</button>
                <button poista-id="<?php echo $id; ?>" class="btn btn-danger poista-object">Poista</button></td>
          </tr>
        <?php
          }
        ?>
      </tbody>

    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Nämä lisäsin itse: -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <script src="javascript/index.js"></script>
  
  </body>

</html>