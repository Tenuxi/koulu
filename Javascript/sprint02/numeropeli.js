'use strict'

// arvotaan arvattava numero väliltä 0-100, 0 ja sata myös mahdollisia
var arvattava = Math.floor(Math.random() * (100 + 1) );

// debug-tulostus kehittäjälle, kommentoi pois tuotantoversiosta
console.log("Arvattava: " + arvattava);

// muuttuja pelaajan nykyistä arvausta varten
// alkuarvo on undefined, jotta erotetaan, onko tehty yhtään arvausta
// vai ei
var arvaus = undefined;


var lkm = 0;
var alempi = 0;
var ylempi = 100;


var vihjeElem  = document.getElementById('vihje');
var alempiElem = document.getElementById('alempi');
var ylempiElem = document.getElementById('ylempi');
var numerotElem = document.getElementById('numerot');

function arvausTehty() {

  var syote = document.getElementById('luku').value;
  arvaus = Number(syote);
  
  document.getElementById('lomake').reset();

  lkm = lkm +1;


  if (arvaus < arvattava) {
    alempiElem.innerHTML = "Luku on suurempi kuin " + arvaus;
  } else if (arvaus > arvattava) {
    ylempiElem.innerHTML = "Luku on pienempi kuin " + arvaus;
  } else {
    vihjeElem.innerHTML = "Arvasit oikein! Käytit " + lkm + " arvausta";
    numerotElem.innerHTML = "Arvauksissa käytetyt numerot: ";
    
 
    var text = "";
    var i = 0;
    while (i <= arvattava) {
        text += "<br> " + i;
        i++;
    }
    // Kirjoita numerot-elementtiin luvut nollasta arvattavaan.
    // Huomaa, että numerot on kirjoitettava html-koodina, jotta ne näytetään oikein!
    document.getElementById('numerot').innerHTML = text;
  }


  return false;
}

// asetetaan tapahtumankäsittelijä lomakkeelle, siis määritellään,
// mitä funktiota kutsutaan, kun lomake lähetetään
document.getElementById('lomake').onsubmit = arvausTehty;
