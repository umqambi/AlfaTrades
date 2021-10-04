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