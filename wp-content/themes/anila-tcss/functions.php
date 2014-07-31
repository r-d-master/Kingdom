<?php

ob_start();

get_template_part('vafpress/bootstrap');
get_template_part('includes/shortcodes');

/*-----------------------------------------------------------------------------------*/
/*	Load FONTS
/*-----------------------------------------------------------------------------------*/
function load_fonts() {
         wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300|Prata');
         wp_enqueue_style( 'googleFonts');
        }
add_action('wp_print_styles', 'load_fonts');

/*-----------------------------------------------------------------------------------*/
/*	Load CSS Files
/*-----------------------------------------------------------------------------------*/
function theme_styles()  {  

		// Load CSS
		wp_enqueue_style( 'clear', get_template_directory_uri() . '/css/clear.css', array());
		wp_enqueue_style( 'carouFredSel', get_template_directory_uri() . '/css/carouFredSel.css', array());
		wp_enqueue_style( 'rekreato_grid', get_template_directory_uri() . '/css/rekreato_grid.css', array());
		wp_enqueue_style( 'common', get_template_directory_uri() . '/css/common.css', array());
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array());
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array());
		wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array());
    }
add_action( 'wp_enqueue_scripts', 'theme_styles' );



/*-----------------------------------------------------------------------------------*/
/*	Load Jquery Files
/*-----------------------------------------------------------------------------------*/
function theme_scripts() {
	
	// Load default JS
	wp_enqueue_script( 'jqueryscript', get_template_directory_uri() . '/js/jquery-1.8.1.min.js');
	wp_enqueue_script( 'jquery-ui-script', get_template_directory_uri() . '/js/jquery-ui-1.10.1.custom.html');
	wp_enqueue_script( 'jquery-easing-script', get_template_directory_uri() . '/js/jquery.easing.1.3.js');
	wp_enqueue_script( 'spastic-nav', get_template_directory_uri() . '/js/jquery.spasticNav.js');
	wp_enqueue_script( 'small-nav', get_template_directory_uri() . '/js/small-menu.js');
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js');
	
	// If viewed on portfolio template
	if ( is_page_template('template-portfolio.php') ) {
	wp_enqueue_script( 'portfolio-script', get_template_directory_uri() . '/js/portfolio.js');
	}
	
	// If viewed from home
	if ( is_home() ) {
	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js');
	wp_enqueue_script( 'touchswipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js');
	wp_enqueue_script( 'myhint', get_template_directory_uri() . '/js/jquery.myHint.js');
	wp_enqueue_script( 'ajaxscript', get_template_directory_uri() . '/js/ajax.js');
	wp_enqueue_script( 'caroufred', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.0-packed.js');
	wp_enqueue_script( 'debouncer', get_template_directory_uri() . '/js/jquery.ba-throttle-debounce.min.js');
	wp_enqueue_script( 'modernizer-custom', get_template_directory_uri() . '/js/modernizr.custom.79639.js');
	wp_enqueue_script( 'carouselslider', get_template_directory_uri() . '/js/carouFredSel_slider.js');
	wp_enqueue_script( 'customhint', get_template_directory_uri() . '/js/customHint.js');
	}
	
	// Load Comment Script
	if( is_single() ){ 
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );




/*-----------------------------------------------------------------------------------*/
/*	Featured Images and Image Sizes
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 960;
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

add_image_size( 'blog', 440,280, true );
add_image_size( 'blog-single', 680,378, true );
add_image_size( 'portfolio-thumbs', 289,220, true );
add_image_size( 'portfolio', 720,470, true );



/*-----------------------------------------------------------------------------------*/
/*	Register Navigation Menu
/*-----------------------------------------------------------------------------------*/

/* Main Nav Menu */
register_nav_menu( 'header_menu','Navigation Menu for Header' );




/*-----------------------------------------------------------------------------------*/
/*	Custom Posts
/*-----------------------------------------------------------------------------------*/

/* Portfolio Custom Posts */
	register_post_type( 'portfolio', /* this can be seen at the URL as a parameter and a unique id for the custom post */
		array(
			'labels' => array(
				'name' => __( 'Portfolio','Porfolio' ), /* The Label of the custom post */
				'singular_name' => __( "Portfolio's", 'textdomain_finale' ) /* The Label of the custom post */
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'), /* The slug of the custom post */
			'supports' => array( 'title', 'thumbnail' ), /* enable basic for text editing */
		)
	);
	
/* Portfolio Taxonomies */
function portfolio_taxonomie() {

	register_taxonomy(
		'portfolio',
		array( 'portfolio' ),
		array(
			'public' => true,
			'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
			'labels' => array(
				'name' => __( 'Portfolio Category', 'textdomain_finale' ),
				'singular_name' => __( 'Porfolio Category', 'textdomain_finale' )
			),
		)
	);
}

add_action( 'init', 'portfolio_taxonomie', 0 );



/*-----------------------------------------------------------------------------------*/
/*	Add Sidebars
/*-----------------------------------------------------------------------------------*/
/* Blog Single */
if ( function_exists('register_sidebar') )
	register_sidebars(1,array(
		'name' => 'Blog Single Sidebar',
		'before_widget' => '<div class="text_widget m_bottom_45">',
		'after_widget'  => '</div><div class="clear"></div>',
		'before_title'  => '<h4 class="m_bottom_5 widget_title">',
		'after_title'   => '</h4>',
	));
	
/* Single page */
if ( function_exists('register_sidebar') )
	register_sidebars(1,array(
		'name' => 'Single Page Widget',
		'before_widget' => '<div class="text_widget">',
		'after_widget'  => '</div><div class="clear"></div>',
		'before_title'  => '<h4 class="m_bottom_5 widget_title">',
		'after_title'   => '</h4>',
	));


/*-----------------------------------------------------------------------------------*/
/*	Function to Limit words and Filter Tags or elements
/*-----------------------------------------------------------------------------------*/
	function content($num) {
		$theContent = get_the_content();
			$output = preg_replace('/<a[^>]+./','', $theContent);
			$output = preg_replace( '/<a>.*<\/a>/', '', $output );
			$output = preg_replace('/<img[^>]+./','', $theContent);
			$output = preg_replace( '/<div>.*<\/div>/', '', $output );
			$output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
			$output = preg_replace( '/<h1>.*<\/h1>/', '', $output );
			$output = preg_replace( '/<h2>.*<\/h2>/', '', $output );
			$output = preg_replace( '/<h3>.*<\/h3>/', '', $output );
			$output = preg_replace( '/<h4>.*<\/h4>/', '', $output );
			$output = preg_replace( '/<h5>.*<\/h5>/', '', $output );
			$output = preg_replace( '/<h6>.*<\/h6>/', '', $output );
			$output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
			$limit = $num+1;
			
		$content = explode(' ', $output, $limit);
		array_pop($content);
		
		$content = implode(" ",$content).".";
		echo $content;
	}
	
	
/*-----------------------------------------------------------------------------------*/
/*	Function for Pagination
/*  
/*  Credits goes to Kriesi ( http://www.kriesi.at )
/*-----------------------------------------------------------------------------------*/	
	function pagination($pages = '', $range = 2)
		{  
			$showitems = ($range * 2)+1;  
			
			global $paged;
			if(empty($paged)) $paged = 1;
			
			if($pages == '')
			{
				global $wp_query;
				$pages = $wp_query->max_num_pages;
				if(!$pages)
				{
					$pages = 1;
					}
				}   
			
			if(1 != $pages)
				{
			echo '<ul class="pagination">';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
					 
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
			
		for ($i=1; $i <= $pages; $i++)
			{
		if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
		echo ($paged == $i)? "<li class='current'>".$i."</li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
			}
		}
			
		if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		echo "</ul>\n";
			}
		}
		
		
		
		
/*-----------------------------------------------------------------------------------*/
/*	Comments list Function
/*-----------------------------------------------------------------------------------*/

/* Fetch Comments */
function theme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        
		<!-- Start Comment List -->
        <div id="div-comment-<?php comment_ID() ?>" class="comment_box">
        
        <div><?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 73 ); ?></div>
        
        <div class="comment_meta">
		<!--<a href="#" class="comment_name">admin</a>-->
        <?php printf(__('%s','textdomain_finale'), get_comment_author_link()) ?>
		<p class="date"><?php printf( __('%1$s at %2$s', 'textdomain_finale'), get_comment_date(),  get_comment_time()) ?></p>
		<!--<a href="#" class="reply">REPLY</a>-->
        <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], reply_text => 'Reply'))) ?>
		</div>

		<!-- Start Comment Text -->
        <div class="comment_content">
        <?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','textdomain_finale') ?></em>
        <br /><br />
        <?php endif; ?>
		<?php comment_text() ?>		
        <?php edit_comment_link(__('(Edit)','textdomain_finale'),'  ','' ); ?>				
		</div>
        <!-- End Comment Text -->
                      
         </div>
        <!-- End Comment List -->   

<?php }
			
ob_end_clean();
			
			
?>