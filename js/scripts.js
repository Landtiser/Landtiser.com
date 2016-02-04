// Toggle Portfolio Items

$('.navigation__toggle').on('click', function() {

  if ($('.navigation').hasClass('s-navigation_expanded')) {
    $('.navigation').removeClass('s-navigation_expanded');
  } else {
    $('.navigation').addClass('s-navigation_expanded');
  }

});

// Toggle Portfolio Backdrop Transparencies

$('.portfolio-grid__image').on('click', function() {

  if ($(this).hasClass('portfolio-grid__image_trans')) {
    $(this).removeClass('portfolio-grid__image_trans');
  } else {
    $(this).addClass('portfolio-grid__image_trans');
  }

});

// Fade Animation for Portfolio Toggle

$(".portfolio-grid__toggle").on("click", function(e){
  e.preventDefault();
  var href = $(this).attr("href");

  $('.' + href).fadeToggle(450);
});
