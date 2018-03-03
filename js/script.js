 var hacerFunccionarMenu=function(){
 	jQuery('li.menu-item.onePage a').click(function(e){
 		if (/#/.test(this.href)) {
 			e.preventDefault();
 			var target = jQuery( jQuery(this).attr('href') );
 			if( target.length ) {
 				event.preventDefault();
 				jQuery('html, body').animate({
 					scrollTop: target.offset().top-75
 				}, 500);
 			}
 		}
 	})
 }
 setTimeout(hacerFunccionarMenu, 10000);
