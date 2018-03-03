jQuery(document).ready(function($) {
	// CLICK MENU ONE PAGE  --------------------------
	$('.primary-navigation li.menu-item a').click(function(e){
		if (/#/.test(this.href)) {
				e.preventDefault();
			
			var target = $( $(this).attr('href') ),
			tlength=$(this).attr('href');

			console.log(target);
			if( tlength.length>1 ) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top-75
				}, 500);
			}
		}
	})
});