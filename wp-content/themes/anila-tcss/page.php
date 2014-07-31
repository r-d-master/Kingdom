<?php get_header(); ?>
            
	<div class="container m_bottom_80">
        
    <?php // Start Loop
    while (have_posts()) : the_post();
							
		the_content();
								
	endwhile;
	// End Loop
	?>    
        
	<div class="clear"></div>
	</div><!--end container-->
	<div class="clear"></div>
    
<?php get_footer(); ?>