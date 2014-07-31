function is_touch_device() {
  return !!('ontouchstart' in window);
}

jQuery(window).load(function() {
	
	$('#nav_menu').spasticNav();

	/******************************************************************************/
	/*   BUTTON HOVER                                                             */
	/******************************************************************************/
	if(!(is_touch_device())){
		jQuery('.accordion h3').hover(function(){
			jQuery(this).css('color', '#D7472C');
		}, function() {
			jQuery(this).css('color', '#27303c');
		});
	}
	/******************************************************************************/
	/*  PORTFOLIO ITEM IMAGE HOVER                                                */
	/******************************************************************************/
	jQuery("ul.gallery li .item-overlay").hide();
	
	if( is_touch_device() ){
		jQuery("ul.gallery li").click(function(){
												  
			var items_before = jQuery(this).prevAll("li").length;
			var opacity = jQuery(this).find(".item-overlay").css("opacity");
			var display = jQuery(this).find(".item-overlay").css("display");
			
			if ((opacity == 0)||(display == "none")) {
				jQuery(this).find(".item-overlay").fadeTo(300, 0.9);
			} else {
				jQuery(this).find(".item-overlay").fadeTo(300, 0);
			}
				
			jQuery(this).parent().find("li:lt(" + items_before + ") .item-overlay").fadeTo(300, 0);
			jQuery(this).parent().find("li:gt(" + items_before + ") .item-overlay").fadeTo(300, 0);
		});	

	}
	else {
			jQuery("ul.gallery li").hover(function() {
					jQuery(this).find(".item-overlay").fadeTo(250, 0.9);
				}, function() {
					jQuery(this).find(".item-overlay").fadeTo(250, 0);		
			});
		
	}	
});
$(document).ready(function() {
		
	$(window).load(function(){
        $('.doc-loader').fadeOut('slow');
     });
	
	var ResetInput = function(){
    	$('input, textarea').each(function() {
        	$(this).val('').text('');
    	});
	};
	$(function() {
		if (window.PIE) {
			$('.rounded').each(function() {
				PIE.attach(this);
			});
		}
	});
});
//------------------------------------------------------------------------
//Helper Methods -->
//------------------------------------------------------------------------

var StringFormat = function() {
    var s = arguments[0];
    for (var i = 0; i < arguments.length - 1; i++) {
        var regExpression = new RegExp("\\{" + i + "\\}", "gm");
        s = s.replace(regExpression, arguments[i + 1]);
    }
    return s;
}