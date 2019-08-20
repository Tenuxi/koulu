console.log ("JS ladattu");

window.onkeypress = function(event) {
    if (event.keyCode == 13) {
    document.getElementById("huomautus2").style.display="none";
    alert("Bravo!")
    } else {
        document.getElementById("huomautus2").style.display="inline"; 
        }
    }
 
