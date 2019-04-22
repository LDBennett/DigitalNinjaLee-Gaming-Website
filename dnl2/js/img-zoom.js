//This javascript code functions to have certain pictures zoomed in when hovered
//over

$(document).ready(function(){
    $('#well img-zoom').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
});