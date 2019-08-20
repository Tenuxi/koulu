

var imageSources = ["runner/runner1.png", "runner/runner2.png", "runner/runner3.png", "runner/runner4.png"];

var index = 0;
setInterval(function(){
    if (index === imageSources.length) {
        index = 0;
    }
    document.getElementById("kuva").src = imageSources[index];
    index++;
}, 100);