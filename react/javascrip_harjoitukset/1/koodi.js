let i = 0

function laskuri() {
    if(i<=99){
        i++
        console.log(i)
    } else {
        i = 0
    }
}
setInterval(laskuri, 500)