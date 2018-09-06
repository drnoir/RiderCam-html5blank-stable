$(document).ready(function(){
    $( ".scroll" ).click(function() { // Top to Bottom
        console.log("scroll button clicked");
    $( ".content" ).animate({bottom: "+=700px",}, 5000, 
    function() {
    console.log("animation function called");
    });
    });
});