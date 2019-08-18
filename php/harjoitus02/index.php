<?php

    //eka asia
    $ensimmainenmuuttuja = 1;
    $toinenmuuttuja = "tama on 2 muuttuja";
    $kolmasmuuttuja = "Heippa maailma!";

    echo $ensimmainenmuuttuja;
    echo "<br/>";
    echo $toinenmuuttuja;
    echo "<br/>";
    echo $kolmasmuuttuja;


    //toka asia
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $firststring = "<b>Helsinki</b>";
    $secondstring = "<b>Busines College</b>";
    $thirdstring = $firststring;
    $thirdstring .= " ".$secondstring; 
    echo "Hei me opiskellaan {$thirdstring}ssa";


    // kolmas asia (TULEE DIVIIN)
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $firstnum = 4;
    $secondnum = 2;
    $thirdnum = $firstnum + $secondnum;

    //neljäs asia
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $sample_array = array ("x", "y", "R", 4, 5, 6, "P", 8);
    $randomarpoja = rand(0,7);
    echo $sample_array[$randomarpoja];


?>
<br>
<br>
<div>(//kolmas asia) hei taa laskee naa yhteen = <?php echo $thirdnum; ?>
</div>