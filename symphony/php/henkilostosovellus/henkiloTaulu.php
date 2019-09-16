<?php 
    
    include("Henkilo.php"); 
    
    $henkilo = new Henkilo();

     $henkilo->luoYhteysTietokantaan();

     $henkilot = $henkilo->haeKaikkiHenkilot();


    ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">HenkiloNRO</th>
      <th scope="col">Etunimi</th>
      <th scope="col">Sukunimi</th>
      <th scope="col">Osasto</th>
      <th scope="col">Palkka</th>
      <th scope="col">Toiminnot</th>
    </tr>
  </thead>
  <tbody>
      <?php
        //tulostetaan kaikki henkilöt
        foreach($henkilot as $henkilo){
            $id = $henkilo['henkilonumero'];
        ?>
    <tr>
      <th><?php echo $id; ?></th>
      <td><?php echo $henkilo['etunimi']; ?></td>
      <td><?php echo $henkilo['sukunimi']; ?></td>
      <td><?php echo $henkilo['osasto']; ?></td>
      <td><?php echo $henkilo['palkka']; ?></td>
      <td><button muuta-id="<?php echo $id; ?>" class="btn btn-primary muuta-object">Muuta</button> / <button poista-id="<?php echo $id; ?>" class="btn btn-danger poista-object">Poista</button> </td>
    </tr>
        <?php
        }
        ?>
   
  </tbody>
</table>

