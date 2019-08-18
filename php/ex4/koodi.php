<?php

foreach ($taulukko as $value) {
    echo "<div id='tehtavat' id='.$value[0].'>";
    print_r($value[1]);
    print_r($value[2]);
    print_r($value[3]);
    print_r($value[4]);
    echo "<img src='img/hedelma'.$value.".png alt='hedelman_kuva'.$value[0]."' class='hedelmankuvat" id='hedelmakuva'.$value[0]."'>";
}


?>