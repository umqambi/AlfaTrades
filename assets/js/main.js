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

$(document).ready(function(){
	
	var marquee = $(".rates-line2-wrap"); 
	marquee.css({"overflow": "hidden", "width": "100%"});
	// оболочка для текста ввиде span (IE не любит дивы с inline-block)
	marquee.wrapInner("<span class='rlwrr'>");
	marquee.find("span.rlwrr").css({ "width": "50%", "display": "inline-block", "text-align":"center" }); 
	marquee.append(marquee.find("span.rlwrr").clone()); // тут у нас два span с текстом
	marquee.wrapInner("<div class='rlwr'>");
	marquee.find("div.rlwr").css("width", "200%");
	var reset = function() {
		$(this).css("margin-left", "0%");
		$(this).animate({ "margin-left": "-100%" }, 12000, 'linear', reset);
	};
	reset.call(marquee.find("div.rlwr"));
		
});
