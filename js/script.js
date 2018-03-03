jQuery(document).ready(function($) {
	// CLICK MENU ONE PAGE  --------------------------
	$('.primary-navigation li.menu-item a').click(function(e){
		if (/#/.test(this.href)) {
			e.preventDefault();
			var target = $( $(this).attr('href') );
			if( target.length ) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top-75
				}, 500);
			}
		}
	})
});