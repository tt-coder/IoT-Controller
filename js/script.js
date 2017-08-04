function changeBrightness(value){
    document.getElementById("brightness").innerHTML = value;
    var img = document.getElementById("stream");
    img.style.webkitFilter = "brightness(" + value + ")";
}