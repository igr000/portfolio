$(document).ready(function(){
	$('.carousel.carousel-slider').carousel({
		indicators:true,
		full_width:true
	});
	$('#home').hover(function(){
		$('#header-text1').fadeIn(5000);
		$('#header-text2').fadeIn(5000);
		$('.contact.col.m4').fadeIn(5000);
		$('.left-col-work').fadeToggle(1000);
		$('.right-col-work').fadeToggle(1000); 
		$('#divider').fadeToggle(2000); 
		$('#work-title').fadeToggle(1000);
		
	});

	$('#work').hover(function(){
		$('#portfolio-title').fadeToggle(1000);
		$('#work-title').fadeIn(5000);
		$('.left-col-work').fadeIn(5000);
		$('#divider').fadeIn(3000);
		$('.right-col-work').fadeIn(5000);
	});

	$('#portfolio').hover(function(){
		$('#portfolio-title').fadeIn(5000);
	});

	
});