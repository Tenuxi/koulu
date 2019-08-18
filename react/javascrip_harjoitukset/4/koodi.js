let scrollPos = 0;

const popup = document.querySelector('popup')

function checkPosition() {
    let windowY = window.scrollY;
    if (windowY < scrollPos) {
        //Ylös
        popup.classList.add('is-visible');
        popup.classList.remove('is-hidden');
        console.log("toimii ylös?");
    } else {
        //alas
        popup.classList.add('is-hidden');
        popup.classList.remove('is-visible');
    }
    scrollPos = windowY;
}

window.addEventListener('scroll', checkPosition);


/*
//Vierityksen funktio
window.addEventListener('scroll ==', function() {
    var popup = alert("BOBUBBI Hyppää silmille!");
  });
*/




//Ponnahdusikkunan funktio
function ponnahdusIkkuna(){
    var popup = alert("BOBUBBI Hyppää silmille!");
}

