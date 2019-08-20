console.log ("JS ladattu");


let div1 = document.getElementById("div1");
let div2 = document.getElementById("div2");

paivitaKoko = () => {
    console.log("Div2 Leveys:", div2.offsetWidth, "px");
    console.log("Div1 korkeus:", div1.offsetHeight, "px");
    div1.style.height = div2.offsetWidth + "px";
}

window.addEventListener("resize", paivitaKoko);

