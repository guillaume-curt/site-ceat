$(document).ready(function(){

    $().timelinr({
        arrowKeys: 'true',
        orientation: 'horizontal'
    })

  /* parallax background */
  $('.promo').parallax();

  /* nice scroll */
  $( 'html' ).niceScroll({
    cursorcolor: '#5f87a0', /* change with your own color */
    cursorwidth: '10px',
    cursorborder: '1px solid #ccc', /* change with your own color */
    cursoropacitymax: 0.9,                
    scrollspeed: 120,
    autohidemode: false,
    horizrailenabled: false,
    cursorborderradius: 2,
    zindex: 1060
  });

  /* scrolltop */
  $('.navbar-nav li a, .menus').on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

  /* scrollspy highlighting active navbar menu */
  $('body').scrollspy({
      target: '.navbar-fixed-top'
  })

  /* close navbar collapse after click in mobile */
  $('.navbar-collapse ul li a').click(function() {
      $('.navbar-toggle:visible').click();
  });


});