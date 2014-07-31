		<div class="clear"></div>
		<div class="one">
			<div class="content_segment">
				<span class="bg_segment">LATEST WORK</span>
			</div>
		</div>
		<div class="clear"></div>
		
			<div class="one m_top_10 m_bottom_50">
			<ul class="gallery">
            	<?php
				$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'post_type' => 'portfolio');
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post);
				$x++;
				?>
            
				<li class="item <?php echo strtolower($the_term); ?><?php echo (($x%3==0)?' last':''); ?>">
				<?php the_post_thumbnail('portfolio-thumbs'); ?>
				</li>
                
                <?php wp_reset_query(); endforeach; ?> 
			</ul>
		</div><!--end one-->
		<div class="clear"></div>