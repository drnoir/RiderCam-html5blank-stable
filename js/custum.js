$(document).ready(function(){
    $( ".scroll" ).click(function() { // Top to Bottom
    console.log("scroll button clicked");
    $.scrollTo('+=800px', 800);
    });    
    
//    
//    $( ".widget_nav_menu li a" ).click(function() {
//        var pagelink = $(this).data('title_link_s');
//        console.log("Menu Link Clicked event - success");
//        console.log(pagelink);
//     $.scrollTo(document.getElementById(pagelink), 800);;
//    });              
});

