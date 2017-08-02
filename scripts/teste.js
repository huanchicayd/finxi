$( document ).ready(function() {
	
	$('.scroll-down').click(function(event){
		event.preventDefault();
		var sectionSobre = $('#teste').offset().top;
		$('html, body').animate({
			scrollTop: sectionSobre + 'px'
		}, 1000);
	});
	
	$('.menu-btn-container').click(function(){
		$('.navbar-navmenu').toggle();
		$(this).toggleClass('btn-close');
		$('.nav').toggleClass('open');
	});
	
	$(window).resize(function() {
		var width = $(window).width();
		if (width >= 1200){
			$('.navbar-navmenu').css('display', 'block');
		} else {
			$('.navbar-navmenu').css('display', 'none');
		}
	});
	
	$(document).scroll(function() {
		var y = $(this).scrollTop();
		if (y > 500) {
			$('a.btn-back').fadeIn();
		} else {
			$('a.btn-back').fadeOut();
		}
	});
	
	$('a.btn-back').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
		return false
	});
	
});