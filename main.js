function toggleOverlay() {
    let overlay = document.getElementsByClassName("overlay");
    overlay.style.display = "block";

}


document.addEventListener("load", toggleOverlay);
