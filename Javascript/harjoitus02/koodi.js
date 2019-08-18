
//HAETAAN SIVULTA

// Kuuntelija (ottaa klikkaukset koko sivulta)
// document.addEventListener('click', funktio1);

// get element ID nappi
document.getElementById('nappi').addEventListener('click', funktio1);

// query selektorilla toimiva nappi
// document.querySelector('.button').addEventListener('click', funktio1);


// Classin mukaan haettu nappulalle
// document.getElementsByClassName('button')[0].addEventListener('click', funktio1);


// Tehdään funktio
// funktiolla heataan (syote) kohdasta teksti
function funktio1() {
    console.log('klikkaus');
    const inputKentta = document.getElementById('syote');

    // tekee (var) syotteen
    let syote = inputKentta.value;

    // tyhjentaa input kentan
    inputKentta.value = '';

    if (syote === '') {
        syote = 'anna jokin teksti';
    }
    console.log('otsikkoon tulee teksti', syote);
    
    var otsikko = document.getElementById('otsikko');
    document.getElementsByTagName('h1')[0].innerHTML = syote;

    document.getElementById('lomakealue').classList.add('divi');
    setTimeout(poista, 3000);
    console.log('värinvaihto');

    }


    //poistamis funktio 
function poista() {
    document.getElementById('lomakealue').classList.remove('divi');
}




    // otsikko.innerHTML = syote;
    //  var otsikko = document.getElementsByTagName('h1')[0];
    // otsikko.innerHTML = syote;