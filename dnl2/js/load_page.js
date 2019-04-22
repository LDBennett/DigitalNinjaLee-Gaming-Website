//Loads Home page
$(document).ready(function(){
    $("#page-content-wrapper").load('pages/home.php');
});

$('#sidebar-wrapper li').click(function(e){
    e.preventDefault(); //prevent the link from being followed
    $('#sidebar-wrapper li').removeClass('active'); //Removes Active Class
    $(this).addClass('active'); //Adds active class to clicked button
    
    var page = $(this).find('a').attr('href'); //Finds href value from link   
    
    if(page !== '#'){ //if not # (link not assigned)
        
        $("#page-content-wrapper").load(page); //id page-content-wrapper loads page
        
        if($(window).width() <= 767){ //if mobile, toggle click to hide sidenav after selecting link
            $('#menu-toggle').click();
        }
    }
    
    return false;
});

//Function to toggle user on the Twitch page of the website
function toggleUser(id){
    $('.tUser').hide();
    $(id).removeClass('hide');
    $(id).fadeIn("slow");
    $('body').animate({scrollTop:0},900); //scrolls to top of page after clicking
}
