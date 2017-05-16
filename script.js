var menuIsOut = false;

$(document).ready(function(){
    if($(window).width() <=600) {
        $('.nav').addClass("flex-column");
        $('.nav').removeClass("nav-pills center-pills");
    } else {
        $('.nav').removeClass("flex-column");
        $('.nav').addClass("nav-pills center-pills");
    }

    $(".menu").click(function(){
        if(menuIsOut) {
            $(".fa-close").addClass("fa-bars").removeClass("fa-close");
            $("nav").animate({
                "left": "-100%"
            },200);
        } else {
            $(".fa-bars").addClass("fa-close").removeClass("fa-bars");
            $("nav").animate({
                "left": "0"
            },200);
        }

        menuIsOut = !menuIsOut;
    });

    $( window ).resize(function() {
        console.log("window resized");
        if($(window).width() <=600) {
            $('.nav').addClass("flex-column");
            $('.nav').removeClass("nav-pills center-pills");
        } else {
            $("nav").css("left","");
            $('.nav').removeClass("flex-column");
            $('.nav').addClass("nav-pills center-pills");
        }
    });
});

