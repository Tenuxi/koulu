println('Paina namiskaa!');

// f1
function parilliset() {
    let i = 2;
    while (i <= 50) {
        println(i);
        i = i + 2;
    }
}

// f2
function yhdestaJohonkin() {
    let i = 1;
    while (i <= 12) {
        println(i);
        i = i + 1;
    }
}

// f3
function jostainJohonkin(mista, mihin) {
    for (var i = mista; i <= mihin; i++) {
        println(i);
    }
}

//f4
function tulostaTahtia(monta) {

    var tahtia = "";

    for (var i = 1; i <= monta; i++) {

        tahtia = tahtia + "*";
    }

    println(tahtia);
}

// f5
function tulostaNelio(pituus) {
    for (var i = 0; i < pituus; i++) {
        tulostaTahtia(pituus)
    }
}


/*
function tulostaNelio(sivuttain) {

    for (var i = 0; i < sivuttain; i++) {

        var rivi = "";

        for (var a = 0; a < sivuttain; a++) {
            rivi = rivi + "*";

        }
        println(rivi);
    }
}
*/


//f6
function tulostaSuorakulmio(leveys, pituus) {
    for (var i = 0; i < pituus; i++) {
        tulostaTahtia(leveys)
    }
}

/*
function tulostaSuorakulmio(sivuttain, pystyyn) {

    for (var i = 0; i < pystyyn; i++) {

        var rivi = "";

        for (var a = 0; a < sivuttain; a++) {
            rivi = rivi + "*";

        }
        println(rivi);
    }
}
*/

// f7
function tulostaKolmio(koko) {

    var kpl = 1;

    for (var i = 0; i < koko; i++) {

        var rivi = "";

        for (var a = 0; a < kpl; a++) {
            rivi = rivi + "*";

        }
        kpl = kpl + 1;
        println(rivi);
    }
}

// f8
function lukusarjanSumma(n) {

        let i = 0;
        let summa = 0;

        while (i <= n) {
            summa = summa + i;
            i = i + 1;
            
        }
        return summa;

}
    
// f9
function kertoma(n) {

    let i = 1;
    let summa = 1;

    while (i <= n) {
        summa = summa * i;
        i = i + 1;
        
    }
    return summa;
}

// f10
function ajaKaikki() {
    println("Parilliset numerot");
    parilliset();
    println("yhdestaJohonkin");
    yhdestaJohonkin();
    println("jostainJohonkin");
    jostainJohonkin(1, 100);
    println("tulostaTahtia");
    tulostaTahtia(10);
    println("tulostaNelio");
    tulostaNelio(4);
    println("tulostaSuorakulmio");
    tulostaSuorakulmio(17, 3);
    println("tulostaKolmio");
    tulostaKolmio(5);
    println("lukusarjanSumma");
    println(lukusarjanSumma(100));
    println("kertoma");
    println(kertoma(10));
}