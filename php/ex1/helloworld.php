<?php

    echo "Hello world!";

?>

<br/>
<br/>
1. yla puolella
<br/>
<hr/>
<br/>
2. Suoraan palvelimelta ajettu tiedosto osaa näyttää vain mitä php koodissa pyydetään tekemään mutta jos pudottaa vain tiedoston selaimeen niin on sama kuin avaisi.txt tiedoston.
<br/>
<hr/>
<br/>
3. "echo" ja "print" on melkein sama asia mutta echo on nopeampi ja echo pystyy käsittelemään monta parametriä kun print vain yhden.
<br/>
<hr/>
<br/>
4. helloworld2.php
<br/>
<?php

    echo "<strong>Hello world!</strong>";

?>
<br/>
<hr/>
<br/>
5. comment.php
<br/>
<?php

    // tässä on kommentti
    print "ylapuolella on kommentti koodin sisalla";

?>
<br/>
<hr/>
<br/>
6.comment2.php
<br/>
<?php

    /* tässä on kommentti
    lisää tekstiä
    ja vielä lisää tekstiä */
    echo "ylapuolella on monirivinen kommentti koodin sisalla";

?>
<br/>
<hr/>
<br/>
7.PHPn vakio merkisto on "ISO-8859" ja se ei ymmarra &auml;&auml;kk&ouml;si&auml; kun taas UTF-8 on normaali merkist&auml;
<br/>
<?php

    header('Content-Type: text/html; charset=utf-8');
    echo "<strong>ÄäÄäÄäkkösiä!</strong>";

?>
<br/>
<hr/>
<br/>
8.
<?php
    header('Content-Type: text/html; charset=utf-8');
    echo "staattisella sivulla mikään ei muutu mutta dynaamisella sivulla esim on muuttujia niinkuin Javascriptiä mikä esim muuttaa ulko asua tai phpta mikä voi lähettää vaikka pyynnön palvelimelle käsitellä tietokantaa.";
    echo "Asiakaspuolen 'skripti' lähettää käsittelijän HTML sivulta esim kasittelija.php lle joka tekee palvelin puolella tehtavansa ja lähettää sen esim sähköpostilla eteenpäin"
?>
<br/>
<hr/>
<br/>
9. variable.php
<?php 
    echo "(VARIABLE) muuttuja on nimi joka ei muutu ja (VALUE) on muuttujan arvo jota muutetaan<br>";
    $txt = "<b>PHP testi<b>";
    echo "tama on " . $txt . "ja se toimii!";
?>