$(window).on("resize", methodToFixLayout);

function methodToFixLayout( e ) {
   
    var winWidth = $(window).width();
    if (winWidth < 640) {
        document.getElementById("navmenu").style.display = "block";
        
    }
    else {
        document.getElementById("navmenu").style.display = "none";
    }
}