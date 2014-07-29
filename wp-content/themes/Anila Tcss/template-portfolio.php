<?php /* Template Name: Portfolio Gallery */ ?>
<?php get_header(); ?>
	
	<div class="container">
		
        <?php // Start Loop
        	while (have_posts()) : the_post();
				the_content();
			endwhile;
		// End Loop
		?>
		
		<div class="clear"></div>
	
		<div class="one">
			<ul id="filterOptions">
				<li class="all active"><a href="#">ALL</a></li>
                <?php
				$terms = get_terms("portfolio");
				$count = count($terms);
				if ( $count > 0 ){
					foreach ( $terms as $term ) {
					echo '<li class="'.strtolower($term->name).'"><a href="#">'.strtolower($term->name).'</a></li>';				
						}
					}
				?>
			</ul>
		</div><!--end one-->
		<div class="clear"></div>
        
        
        
		<div class="one m_top_10 m_bottom_150">
			<ul class="gallery">
            
            	<?php
				$args = array( 'numberposts' => -1, 'order'=> 'DESC', 'post_type' => 'portfolio');
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post);
							
				$terms = get_the_terms( $post->ID, 'portfolio' );					
				if ( $terms && ! is_wp_error( $terms ) ) : 
					$term_links = array();
				foreach ( $terms as $term ) {
					$term_links[] = $term->name;
				}	
									
				$the_term = join( " ", $term_links );
				$x++;
				?>
            
				<li class="item <?php echo strtolower($the_term); ?><?php echo (($x%3==0)?' last':''); ?>">
                
					<?php the_post_thumbnail('portfolio-thumbs'); ?>
                    <div class="item-overlay">
						<div class="<?php if( vp_metabox('portfolio_option.portfolio_video') == '' ){ echo 'preview'; }else{ echo 'preview_video'; } ?>"></div>
						<div class="item-overlay-text">
							<a href="<?php if( vp_metabox('portfolio_option.portfolio_video') == '' ){ 
							echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							}else{
							echo vp_metabox('portfolio_option.portfolio_video');
							}
							?>" target="_blank"><?php if( vp_metabox('portfolio_option.portfolio_video') == '' ){ echo 'VIEW'; }else{ echo 'WATCH'; } ?></a>
						</div>					
					</div>
				</li>
                
                <?php endif; ?>
                <?php wp_reset_query(); endforeach; ?>
                
			</ul>
		</div><!--end one-->
		<div class="clear"></div>
        
        
	</div><!--end container-->
	<div class="clear"></div>
        	        
<?php get_footer(); ?>