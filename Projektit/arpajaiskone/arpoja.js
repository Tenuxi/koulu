'use strict'

console.log("js ladattu");



// let osoite = document.getElementById('osoite');



// document.getElementById("div3").innerHTML = document.getElementById('osoite').value;


// console.log(osoite);




function arvontasuoritettu() {

    console.log ("Arvonta aloitettu");
    



    // disabloi napin arpomisen jälkeen
    document.getElementById("nappi").disabled=true;
    console.log("nappi disabloitu");
    return false;
}





document.getElementById('kone').onsubmit = arvontasuoritettu; 


