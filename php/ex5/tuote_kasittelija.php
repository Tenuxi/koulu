<?php







echo "<form id='tilaus' method='post' action='index.php?page=tilattu'>";

foreach($_POST['valinta'] as $checkboxid) {
    echo "<pre>";
    echo "Tilattava tuote: " . $checkboxid;
    echo "</pre>";

    
 }


 
 
 echo "<label for='etunimi'>Etunimi:</label><br /> <input type='text' name='etunimi' id='etunimi' /> <br />";

 echo "<label for='sukunimi'>Sukunimi:</label><br /> <input type='text' name='sukunimi' id='sukunimi' /> <br />";
 
 echo "<label for='sposti'>Sähköposti:</label><br /> <input type='text' name='email' id='email' /> <br />";
 
 echo "<input type='submit' name='laheta' id='laheta' value='Lähetä tilaus' method='post' />";

 echo "</form>";


?>