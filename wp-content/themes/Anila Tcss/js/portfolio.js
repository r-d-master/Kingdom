$(document).ready(function() {
	$('a[data-rel]').each(function() {
		$(this).attr('rel', $(this).data('rel'));
	});

	

$("ul.gallery li:visible").filter(":nth-child(3n)");
	$('ul#filterOptions li').click(function() {								
		$('ul#filterOptions li.active').removeClass('active');
		$(this).addClass('active');
		
		var filterVal = $(this).text().toLowerCase().replace(/ /g,'-');
				
		if(filterVal == 'all') {
			$('ul.gallery li, img.absolute').animate({opacity: 1}, 1000);
			$("a[rel^='prettyPhoto']").each(function() 
				{
					$(this).addClass('active-items');
				});		
		} else {
			$('ul.gallery li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).animate({opacity: 0.1}, 1000);
				} else {
					$(this).animate({opacity: 1}, 1000);
					$(this).find('a').addClass('active-items');
				}
			});
		}
		
		$('*').removeClass('active-items');
		return false;	
	});
});