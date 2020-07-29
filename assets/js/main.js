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
    // Check if nav contains class 'index-nav', if so, do not perform the function
    if (!['.index-nav']) {
        var x = nav.clientHeight;
        main.style.paddingTop = x+'px';
    }
}

// Menu Btn

$(document).ready(function(){
    $("button").click(function(){
        $("#menu").slideToggle("slow");
    });
});