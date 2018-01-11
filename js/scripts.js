$ = jQuery.noConflict();

$(document).ready(function() {
	
	// TOGGLE MENU
	$('.mobile-menu a').on('click', function(){
		$('nav.site-nav').toggle('slow');
	})

	var breakpoint = 768;
	$(window).resize(function(){
		if($(document).width() >= breakpoint){
			$('nav.site-nav').show();
		}else{
			$('nav.site-nav').hide();
		}
	});
});