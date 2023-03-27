let modal = document.querySelector('.popup-wrapper');
let btn = document.querySelectorAll(".button-more");
let span = document.querySelector(".close");
btn.forEach(el => {
    el.addEventListener('click', () => {
        modal.style.display = "block";
    })
})
span.onclick = function() {
    modal.style.display = "none"
}
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none"
    }
}