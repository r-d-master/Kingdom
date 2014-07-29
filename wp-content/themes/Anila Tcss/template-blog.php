<?php /* Template Name: News Blog */ ?>
<?php get_header(); ?>
            	
	<div class="container">
		<div class="column_680 m_bottom_20">
        
        
        <?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
		'orderby'  => 'date',
		'order'    => 'DESC',
		'paged'	   => $paged
		);
								
		query_posts($args);
		while ( have_posts() ) : the_post(); 
		?>
        
        
			<div class="column_210 m_top_55">
				<a href="<?php echo get_permalink(); ?>" class="blog_post_title"><?php the_title(); ?></a>
				<p class="blog_info">
					Date: 		<span><?php the_time('F d,') ?></span>&nbsp;&nbsp;<span><?php the_time('Y') ?></span><br />
					Author:		<span><?php echo the_author_meta('nickname', get_the_author_meta( 'ID' ) ); ?></span><br />
					Comments:	<span><?php comments_number() ?></span><br />
					Categories: <span><?php the_category(', '); ?></span>
				</p>
			</div><!--end column_210-->
			<div class="column_440 m_top_65 last">
				<?php if( has_post_thumbnail() ){ the_post_thumbnail('blog'); }else{ ?>
                	<img src="<?php echo get_template_directory_uri(); ?>/images/blank-blog.png">
                <?php } ?>
			</div><!--end column_440-->
			<div class="clear"></div>
			<div class="post_content m_top_15">
				<p><?php content('50') ?></p>
				<a class="button read_more rounded" href="<?php echo get_permalink(); ?>">Read More</a>
			</div>
            <div class="clear"></div>
            
            <?php endwhile; ?>
            
			<div class="more_post m_top_15 m_bottom_185">
                <?php echo pagination(); ?>
			</div>
             
		</div><!--end column_680-->
        
		<!--sidebar--> 		
		<?php get_sidebar(); ?>
        <!-- End Sidebar -->
        
        
		<div class="clear"></div>
	</div><!--end container-->
	<div class="clear"></div>
	
<?php get_footer(); ?>