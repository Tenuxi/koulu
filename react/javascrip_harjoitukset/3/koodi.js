//Liikuttaa palloa oikealle
function liikkuja(){

    console.log("Alkaa liikkumaan");

    var elem = document.getElementById("animaatio");
    console.log("Hakee HTML elementin");

    //Aloitu kohta vasemmalta 125px
    var pos = 125;
    console.log("Määrittää aloitus paikan");

    var id = setInterval(frame, 5);


    //Liikuttaa 300px oikealle
    function frame() {
        if (pos == 425) {
            clearInterval(id);
        } else {
            pos++;
            elem.style.left = pos + "px";
        }
    }
    console.log("Liikutettu oikealle 300px");
}


//Liikuttaa palloa vasemmalle
function palauttaja(){

    console.log("Alkaa palauttamaan");

    var elem = document.getElementById("animaatio");
    console.log("Hakee HTML elementin");

    //Aloitu kohta vasemmalta 425px
    var pos = 425;
    console.log("Määrittää uuden aloitus paikan");

    var id = setInterval(frame, 5);

    //Liikuttaa 300px vasemmalle
    function frame() {
        if (pos == 125) {
            clearInterval(id);
        } else {
            pos--;
            elem.style.left = pos + "px";
        }
    }
    console.log("Palautettu 300px vasemmalle");
}