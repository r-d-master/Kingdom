<?php get_header(); ?>
            	
	<div class="container">
		<div class="column_680">
		
			<div class="column_440 m_top_55">
				<a href="#" class="blog_post_title_single"><?php the_title(); ?></a>
			</div>
            
            
            
            <?php while (have_posts()) : the_post(); ?>
			<div class="column_210 m_top_55 last">
				<p class="post_info">
					Date: 		<span><?php the_time('F d,') ?></span>&nbsp;&nbsp;<span><?php the_time('Y') ?></span><br />
					Author:		<span><?php echo the_author_meta('nickname', get_the_author_meta( 'ID' ) ); ?></span><br />
					Comments:	<span><?php comments_number() ?></span><br />
					Categories: <span><?php the_category(', '); ?></span>
				</p>
			</div><!--end column_210-->
			<div class="clear"></div>
            
			<?php if( has_post_thumbnail() ){ ?>
			<div class="m_top_40">
				<?php the_post_thumbnail('blog-single'); ?>
			</div>
            <?php } ?>
            
			<div class="post_content_single m_top_40 last">
			<?php the_content(); ?>
			</div>
			<div class="clear"></div>
            
            
            
			<div class="more_post m_top_40 m_bottom_45">
                <ul>
                    <li class="prev_post"><?php previous_post_link('%link', 'PREVIOUS POST'); ?></li>
                    <li class="next_post"><?php next_post_link('%link', 'NEXT POST'); ?></li>
                </ul>
                <div class="clear"></div>
			</div>
            
            
            <div class="column_680">
				<div class="content_segment last_segment  m_top_25 m_bottom_55"></div>
			</div>
            <?php endwhile; ?>
            
            
            
            
            
            <!-- Comment Template -->
			<?php comments_template(); ?>
            <!-- End Comment Template -->
            
		</div><!--end column_680-->
        
        
        
		<!--sidebar-->
        <?php get_sidebar('single'); ?>
		<!-- End Sidebar -->
        
        
        
	</div><!--end container-->
	<div class="clear"></div>
	
<?php get_footer(); ?>