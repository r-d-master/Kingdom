(function($) {

	$.fn.spasticNav = function(options) {
	
		options = $.extend({
			overlap : 20,
			speed : 300,
			reset : 1000,
			color : '',
			easing : 'easeOutExpo'
		}, options);
	
		return this.each(function() {
		
		 	var nav_menu = $(this),
		 		currentPageItem = $('.current-menu-item', nav_menu),
		 		blob,
		 		reset;
		 		
		 	$('<li class="blob"></li>').css({
		 		width : currentPageItem.outerWidth(),
		 		left : currentPageItem.position().left,
		 		backgroundColor : options.color
		 	}).appendTo(this);
		 	
		 	blob = $('.blob', nav_menu);
		 	
			$('li:not(.blob)', nav_menu).hover(function() {
				// mouse over
				clearTimeout(reset);
				blob.animate(
					{
						left : $(this).position().left,
						width : $(this).width()
					},
					{
						duration : options.speed,
						easing : options.easing,
						queue : false
					}
				);
			}, function() {
				// mouse out	
				reset = setTimeout(function() {
					blob.animate({
						width : currentPageItem.outerWidth(),
						left : currentPageItem.position().left
					}, options.speed)
				}, options.reset);
	
			});
		
		}); // end each
	
	};

})(jQuery);