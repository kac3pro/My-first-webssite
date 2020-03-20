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