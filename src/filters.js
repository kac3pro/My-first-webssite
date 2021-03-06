


function toggleCb(e) {
    e.checked = !e.checked;
    let checked = e.getAttribute("aria-checked");
    if(checked === "true")
        e.setAttribute('aria-checked', "false");
    else
        e.setAttribute('aria-checked', 'true');
}
function focusCb(e) {
    if(e.code==='Space')
        toggleCb(e.target);
}
let checkboxes_real = document.getElementsByClassName('cb');
let checkmarks = document.getElementsByClassName('checkmark');
for( let i = 0; i < checkmarks.length; i++) {
    let b = checkmarks[i];
    let cb = checkboxes_real[i];
    b.addEventListener("click", () => {toggleCb(checkboxes_real[i])});
    b.addEventListener('keydown', e => {
        if(e.code==='Space') {
            toggleCb(checkboxes_real[i]);
            event.preventDefault();
        }
    });
}


let inputs = document.querySelectorAll(".filters input");

function sendForm(e) {
    let formData = new FormData(document.getElementById("filters"));
    fetch('api/search.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .catch(error => console.error("Error:", error))
    .then(response => {
        fetch("partial/item_card.html")
        .then(response => response.text())
        .then(template => {
            let rendered = Mustache.render(template, response);
            let results = document.getElementById("results");
            results.innerHTML += rendered;
        })

    })
}

inputs.forEach(input => {
   addEventListener("click", sendForm);
});