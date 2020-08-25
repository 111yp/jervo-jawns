function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    $(".sidenav").css({
        "box-shadow": "1px 10px 20px 7px rgba(0,0,0,0.15)"
    })
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
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