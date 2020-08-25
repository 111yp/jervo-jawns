const side_nav = document.querySelector("#mySidenav");
const menu_button = document.querySelector(".menu-btn");
const dark_bg = document.querySelector(".dark-bg");

dark_bg.addEventListener('click', closeNav);
menu_button.addEventListener('click', openNav);

function openNav() {
    dark_bg.style.display = 'flex';
    side_nav.style.width = "250px";
    $(".sidenav").css({
      "box-shadow": "1px 10px 20px 7px rgba(0,0,0,0.15)"
    })
}

function closeNav() {
  dark_bg.style.display = 'none';
  side_nav.style.width = "0";
  $(".sidenav").css({
      "box-shadow": "none"
  })
}

//google map stuff
//using this api : https://developers.google.com/maps/documentation/javascript/overview

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: {
      lat: 39.9526,
      lng: -75.1652
    },
    zoom: 15,
    disableDefaultUI: true
  });
}