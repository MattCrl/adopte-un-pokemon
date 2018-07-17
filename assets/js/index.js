import $ from 'jquery'

// Scroll button to see online ads
$("#button-scroll").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#scroll-target").offset().top
    }, 1000);
});
