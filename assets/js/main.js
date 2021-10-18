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
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  variableWidth: true
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

$( function() {
  $( "#faq-accordion" ).accordion({
    heightStyle: "content",
    icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" }
  });
} );


$('#news-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  variableWidth: true
});



// $(document).ready(function(){
// 	$('#reviews-slider-nav-prev').click(function(){
// 		document.querySelector('.slick-prev').click();
// 	});
// });
// $(document).ready(function(){
// 	$('#reviews-slider-nav-next').click(function(){
// 		document.querySelector('.slick-next').click();
// 	});
// });
$(document).ready(function(){
	$('#news-slider-nav-prev').click(function(){
		document.querySelector('.slick-prev').click();
	});
});
$(document).ready(function(){
	$('#news-slider-nav-next').click(function(){
		document.querySelector('.slick-next').click();
	});
});

// OWL CAROUSEL INITS
$(document).ready(function(){
	$("#partners_slider").owlCarousel({
		loop:true,
    	margin:10,
    	nav:true,
		responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:5,
				nav:true,
			}
		}
	});
	// Reviews crousel
	var  owlReviews = $('.owl-carousel');
	owlReviews.owlCarousel({
		loop:true,
    	margin:10,
    	nav:false,
		center:true,
		autoWidth:true,
		responsive:{
			0:{
				items:1,
				margin:0,
			},
			600:{
				items:3
			},
			1000:{
				items:5,
			}
		}
	});
	// Go to the next item
	$('#reviews-slider-nav-next').click(function() {
		owlReviews.trigger('next.owl.carousel', [800]);
	})
	// Go to the previous item
	$('#reviews-slider-nav-prev').click(function() {
		// With optional speed parameter
		// Parameters has to be in square bracket '[]'
		owlReviews.trigger('prev.owl.carousel', [800]);
	})
});


// PAGE OPEN ANIMATION
$(document).ready(function() {
	// $("#content").css("display", "none");
	$("#content").fadeIn(2000);
});