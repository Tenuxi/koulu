console.log("JS ladattu");


// When the user clicks on <div>, open the popup
function nappiFunktio() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
  console.log("Popup ladattu napista");
}

window.onscroll = () => {
  let scrollHeigth = window.scrollY;
  let popup = document.getElementById("myPopup");
  console.log(scrollHeigth);
  if (scrollHeigth >= 300) {
    popup.classList.add("show");
  } else if (scrollHeigth < 300) {
    popup.classList.remove("show");
  }
 };

/*
//Scrollaus funktio
    window.scroll(function rullaFunktio() {
        if ($(window).scrollTop() >= 300) {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
            console.log("HALOO!");
    } else {
        popup.classList.toggle("hidden");
    }
   });
*/


/*
//Scrollaus funktio
window.addEventListener('scroll', function rullaFunktio() {

    console.log(window.scrollY);

    var popup = document.getElementById("rullaPopup");
    console.log("Hakee HTML elementin");

    var pos = 200;
    console.log("määrittää aloituspaikan");

    popup.classList.toggle("show");
    popup.innerHTML = "HALOO!";
    console.log("toimiiko tähän asti");
    
    
  });
*/

/*
//Scrollaus funktio
window.addEventListener('scroll', function rullaFunktio() {
    var popup = document.getElementById("rullaPopup");
    popup.classList.toggle("show");
    console.log("Popup ladattu RULLAAMISESTA");
    document.getElementById('rullaPopup').innerHTML = pageYOffset + '200px';
  });
*/
/*
function rullaFunktio() {
    var popup = document.getElementById("rullaPopup");
    onscroll.
    popup.classList.toggle("show");
    console.log("Popup ladattu napista");
  }
*/


/*
let scrollPos = 200;

const popup = document.querySelector('myPopup')

function checkPosition() {
    let windowY = window.scrollY;
    if (windowY < scrollPos) {
        //Ylös
        popup.classList.toggle("show");
        console.log("toimii ylös?");
    } else {
        //alas
        popup.classList.add('is-hidden');
        popup.classList.remove('is-visible');
    }
    scrollPos = windowY;
}

window.addEventListener('scroll', checkPosition);



//Vierityksen funktio
window.addEventListener('scroll ==', function() {
    var popup = alert("BOBUBBI Hyppää silmille!");
  });





 //Ponnahdusikkunan funktio
function ponnahdusIkkuna(){
    var popup = alert("BOBUBBI Hyppää silmille!");
}

*/