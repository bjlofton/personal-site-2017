
$(document).ready(function() {
    $( "#name" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#main").offset().top
        }, 1000);
    });
    $( "#about" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1000);
    });

});

$(document).ready(function(){
    $("#resume").click(function(){
      $("#view_options").slideToggle('slow');
    });
});

