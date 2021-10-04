$(document).ready(function(){
	$('.menu-toggle').click(function(){
		$('#top-nav').slideToggle(300);
        $('#header').slideToggle(0);
        $('#main').toggleClass("muted");
	});
});

$(document).ready(function(){
	$('.lang-toggle').click(function(){
        $(this).parent().find('#lang-content').slideToggle(300);
        $(this).find($('.btn-icon')).toggleClass("rotated");
    });
    
});

$('.reviews-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });