// Set top padding to main based on nav height

const nav = document.querySelector('nav');
const main = document.querySelector('main');

window.onresize = responsivenessCheck;
window.onload = initCheck;

function initCheck() {
    responsivenessCheck();
    window.scrollTo(0, 0);
}

function responsivenessCheck() {
    var x = nav.clientHeight;
    main.style.paddingTop = x+'px';
}