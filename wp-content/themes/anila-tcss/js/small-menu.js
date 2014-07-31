
jQuery(window).load(function() {
	 	
		var activeItem = null;		 
		var small_menu = '<div class="small-menu-wrapper"><select class="small-menu">';

		jQuery('#main_menu nav ul#nav_menu').find('li').each(function(){
			var href = jQuery(this).find('a').first().attr('href');
			var title = jQuery(this).find('a').first().text();	
			if(jQuery(this).hasClass('active')) {	
				activeItem = jQuery(this).find('a').first().attr('href');
			}
			if(jQuery(this).hasClass('blob')) {
				return false;
			}
			small_menu += '<option value="'+href+'">'+title+'</option>';
		});		
		small_menu += '</select></div>';		
		jQuery('#main_menu nav ul#nav_menu').after(small_menu);

		jQuery('select.small-menu option:selected').removeAttr('selected');
		jQuery('select.small-menu option[value="'+ activeItem +'"]').attr('selected', 'selected');
		
		if (jQuery(document).width() < 767 ) { 
		   jQuery('#main_menu nav').width('100%');
		   jQuery('#main_menu nav ul#nav_menu').hide();
		   jQuery('.small-menu-wrapper').show();
		} 
		else {
		   jQuery('#main_menu nav').width('auto');
		   jQuery('.small-menu-wrapper').hide();
		   jQuery('#main_menu nav ul#nav_menu').show(); 
		}

	jQuery('.small-menu').change(function() {
		var goTo = jQuery(this).val();
			window.location.href = goTo;
	});	   
});

jQuery(window).resize(function(){
	
	if (jQuery(document).width() < 767 ) {      
	   jQuery('#main_menu nav').width('100%');
	   jQuery('#main_menu nav ul#nav_menu').hide();
	   jQuery('.small-menu-wrapper').show();
    }
	else {
		jQuery('.small-menu-wrapper').hide();
	    jQuery('#main_menu nav ul#nav_menu').show();
	    jQuery('#main_menu nav').width('auto');    
	}
	   
});

