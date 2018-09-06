$(document).ready(function(){
    $( ".scroll" ).click(function() { // Top to Bottom
        console.log("scroll button clicked");
    $( "#content-area" ).animate({ "top": "+=700px" }, "slow" );
    });
});