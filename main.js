let overlay = (document.getElementById("overlay"));

window.onload = () => {
    setTimeout(function() {
        overlay.style.display = 'block';
    }, 10000)
};
overlay.addEventListener("click", e => {
    if(e.target.id === 'overlay')
        overlay.style.display = 'none';
});

let submit = document.getElementById('newsletter-submit');
submit.addEventListener('click', () => {
   overlay.style.display = 'none';
});

