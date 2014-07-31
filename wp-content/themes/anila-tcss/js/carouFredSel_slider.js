jQuery(window).load(function() {
									 
	$('#wisdoms-slides').carouFredSel({	
		responsive: true,
		auto: false,
		align: 'center',
		height: 'variable',
		scroll: 1,		
		next: '#wisdoms_next',
		mousewheel: true,
		swipe: {
			onMouse: true,
			onTouch: true
		}, items: {
			height: 'variable'
		}
	});	
	jQuery('#wisdoms_next').hover(function(){
        jQuery(this).find('img').css({
            'margin-top':'-70px'
        });
    }, function() {
        jQuery(this).find('img').css({
            'margin-top':'0px'
        });
    });
	
	//Image slider configuration
    $('#latest_work_image_slider').carouFredSel({
        responsive: true,
        width: '100%',		
        auto: false,
        scroll: 1, 					
        prev: '#latest_work_prev',
        next: '#latest_work_next',
        pagination: "#latest_work_slide_pager",	
        swipe: {
            onMouse: false,
            onTouch: false
        },
        items: {
            width: 400,
            height: 'auto',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 3
            },
			start: 2
        }
    });

	//Fix for slider pagination
    jQuery('.slider_holder').each(function(){
        var pagination_width = jQuery(this).find('.carousel_pagination').first().width();
        var windw_width = jQuery(this).width();
        jQuery(this).find('.carousel_pagination').first().css("margin-left", (windw_width-pagination_width)/2);
    });
		
    
    //Fix for latest work item text
    jQuery("#latest_work_image_slider li").each(function(){
        var element_holder_width = jQuery(this).width();
        var element_holder_height = jQuery(this).height();
        var latest_work_text_width = jQuery(this).find("span.latest_work_item_text").width();
        var latest_work_text_height = jQuery(this).find("span.latest_work_item_text").height();
        var top = (element_holder_height - latest_work_text_height)/2;
        var left = (element_holder_width - latest_work_text_width)/2;
        jQuery(this).find("span.latest_work_item_text").css({
            'top': top, 
            'left': left
        });
    });

	
	

	if( is_touch_device() ){
		
				
		//latest work
		jQuery("ul#latest_work_image_slider li a.preview").css("visibility", "hidden");		
		jQuery("ul#latest_work_image_slider li").click(function(){									
			var display = jQuery(this).find("span:first").css("display");
			
			if(display == 'none')
				{					
					jQuery(this).find("span").show();		
					jQuery(this).find("a.preview").css("visibility", "hidden");		
				}else
				{
					jQuery(this).parent().find("li span").show();
					jQuery(this).find("a.preview").css("visibility", "hidden");		
					jQuery(this).find("span").hide();		
					jQuery(this).find("a.preview").css("visibility", "visible");			
				}							
		});			
		jQuery("ul#latest_work_image_slider li a.preview").click(function(){					
		jQuery(this).nextAll('span.shadow, span.latest_work_item_text').show();							
		});		
  
	}else
	{
		//if not touch device
		jQuery('ul#latest_work_image_slider li').hover(function() {
					jQuery(this).find("span").hide();					
				}, function() {
					jQuery(this).find("span").show();					
			});				
	}	

	
});


jQuery(window).resize(function(){

	//Fix for slider pagination
    jQuery('.slider_holder').each(function(){
        var pagination_width = jQuery(this).find('.carousel_pagination').first().width();
        var windw_width = jQuery(this).width();
        jQuery(this).find('.carousel_pagination').first().css("margin-left", (windw_width-pagination_width)/2);
    });
	
	
    //Fix for latest work item text
    jQuery("#latest_work_image_slider li").each(function(){
        var element_holder_width = jQuery(this).width();
        var element_holder_height = jQuery(this).height();
        var latest_work_text_width = jQuery(this).find("span.latest_work_item_text").width();
        var latest_work_text_height = jQuery(this).find("span.latest_work_item_text").height();
        var top = (element_holder_height - latest_work_text_height)/2;
        var left = (element_holder_width - latest_work_text_width)/2;
        jQuery(this).find("span.latest_work_item_text").css({
            'top': top, 
            'left': left
        });
    });

});

//------------------------------------------------------------------------
//Helper Methods -->
//------------------------------------------------------------------------

function is_touch_device() {
  return !!('ontouchstart' in window);
}