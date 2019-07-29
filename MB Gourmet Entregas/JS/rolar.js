var $doc = $('html, body');
$('.navbar a[href^="#"], .nav_footer a[href^="#"]').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href')).offset().top
    }, 500);
    return false;
});
