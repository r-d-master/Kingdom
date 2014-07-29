
var activeNavItemClass = 'nav-active';
var plusActive = 'plus-active';

$(document).ready(function(){

	(function($) {
		  
		var panel = $('.accordion .accordion_container .hide').show();
 
  		$('.accordion .accordion_container h3').click(function() {
			
			if ($(panel).is(":hidden")) {
				$('.title-icon').css("background", 'url("images/minus_contact_icon.png")');
			} else {
				$('.title-icon').css("background", 'url("images/plus_contact_icon.png")');
			}
			panel.slideToggle();
    		return false;
		});
  
  		$('.accordion .accordion_container .title-icon').click(function() {
			
			if ($(panel).is(":hidden")) {
				$('.title-icon').css("background", 'url("images/minus_contact_icon.png")');
			} else {
				$('.title-icon').css("background", 'url("images/plus_contact_icon.png")');
			}
			panel.slideToggle();
    		return false;
  		});
 	})(jQuery);
	jQuery('.title-icon').hover(function(){
			jQuery(this).css('background-position', 'left bottom');
		}, function() {
			jQuery(this).css('background-position', 'left top');
	});
});

