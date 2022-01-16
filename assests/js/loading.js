
//Hide all content
$(".mainBodyShow").hide();
$('.mainLoadingSpin').show();

$(document).ready(function(){

    $('.mainLoadingSpin').delay(700).fadeOut();
    $(".mainBodyShow").delay(1300).fadeIn();
   
});