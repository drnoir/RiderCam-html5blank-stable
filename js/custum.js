$(document).ready(function(){
    $( ".scroll" ).click(function() { // Top to Bottom
    console.log("scroll button clicked");
//    $.scrollTo({bottom:'+=700px'}, 800);
    $.scrollTo('+=700px', 800);
    });
});