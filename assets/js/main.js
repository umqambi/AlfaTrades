$(document).ready(function(){

	$('.menu-toggle').click(function(){
		$('#top-nav').slideToggle(300);
        $('#header').slideToggle(0);
        $('#main').toggleClass("muted");
	});


});