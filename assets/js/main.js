$(document).ready(function(){
    $("button").click(function(){
        $("#menu").slideToggle("slow");
        //OLD HAMBURGER MENU
        /*
        if ($("#menu-img").attr('src') == 'assets/svg/hamburger.svg')
        {
            $("#menu-img").attr('src', 'assets/svg/cancel.svg');
        }
        else
        {
            $("#menu-img").attr('src', 'assets/svg/hamburger.svg');
        }
        */
    });
  });
  