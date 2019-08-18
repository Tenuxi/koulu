function salaviesti(a, b) {
    let viesti = a + ' ja ' + b + ' yhteen soppii.';
    document.getElementById('viesti').innerHTML = viesti;
    console.log('salaviestintulostus');
}

function muodostaViesti() {
     let x = document.querySelector('#nimi1').value; 
     let y = document.querySelector('#nimi2').value;
     salaviesti(x, y);
     console.log (x, y);
}

document.querySelector('form').onsubmit = muodostaViesti;

// RANDOM generator

var c = ["Matti", "Mauno", "Sami"];
var d = ["Minna", "Liisa", "Anni"];

function satunnainen (c, d) {
    let viesti2 = c + ' ja ' + d + ' tuurilla yhteen soppii.';
    document.getElementById('viesti2').innerHTML = viesti2;
    console.log('satunnainen tuloste');

    
    return false;
}

document.querySelector('#random').onsubmit = satunnainen;