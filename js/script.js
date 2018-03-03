jQuery(document).ready(function($) {
	// CLICK MENU ONE PAGE  --------------------------
	$('.primary-navigation li.menu-item').click(function(){
		if (/#/.test(this.href)) {
			console.log(this);
			e.preventDefault();
		}
	})
});