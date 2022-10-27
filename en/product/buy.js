
function next1() {
    var radio = document.getElementById("model");
    var text = document.getElementById("color");
    if (radio.checked === true){
        text.style.display = "none";
    } else {
        text.style.display = "block";
    }
}

function next2() {
    var radio = document.getElementById("color");
    var text = document.getElementById("size");
    if (radio.checked === true){
        text.style.display = "none";
    } else {
        text.style.display = "block";
    }
}

function next3() {
    var radio = document.getElementById("size");
    var text = document.getElementById("price-div");
    if (radio.checked === true){
        text.style.display = "none";
    } else {
        text.style.display = "block";
    }
}