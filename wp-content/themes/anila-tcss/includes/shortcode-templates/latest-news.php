<div class="one">
    <div class="content_segment">
    <span class="bg_segment">LATEST NEWS</span>
    </div>
</div>
<div class="clear"></div>

		<?php
		$args = array( 'numberposts' => 3, 'order'=> 'DESC');
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post);
		$x++;
		?>
        
        <div class="one_third<?php if( $x == '3'){ echo ' last'; } ?>">
        <h3 class="m_top_10 m_bottom_20"><?php the_title(); ?></h3>
        <p><?php content('30'); ?></p>
        <a href="<?php echo get_permalink(); ?>" class="button read rounded">Read</a>
        </div>
        
        <?php wp_reset_query(); endforeach; ?>