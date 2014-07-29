<?php

/* ============================================================================================== */
// Services
/* ============================================================================================== */
function finale_service_function( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'title' => '',
			'icon' => '',
			'position' => 'first',
		), $atts )
	);

	// Code
	return '<div class="one_third '.$position.'">
			<div class="m_bottom_20" style="background: transparent url('.$icon.') no-repeat; background-size:30px 30px;">
			<h3 class="m_left_35">'.$title.'</h3>
			</div>
			<p>'.$content.'</p>
		</div>';
}
add_shortcode( 'finale_service', 'finale_service_function' );
// [finale_service title="" icon="" position="last"]...[/finale_service]






/* ============================================================================================== */
// Show Latest Portfolio
/* ============================================================================================== */
function finale_latest_portfolio() {

	// Code
	ob_start();
	get_template_part('includes/shortcode-templates/latest-portfolio');
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode( 'finale_latest_portfolio', 'finale_latest_portfolio' );
// [finale_latest_portfolio]






/* ============================================================================================== */
// Show Latest News
/* ============================================================================================== */
function finale_latest_news() {

	// Code
	ob_start();
	get_template_part('includes/shortcode-templates/latest-news');
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode( 'finale_latest_news', 'finale_latest_news' );
// [finale_latest_news]






/* ============================================================================================== */
// Header Title
/* ============================================================================================== */
function finale_header( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);

	// Code
	return '<div class="one">
			<div class="content_segment">
				<span class="bg_segment">'.$title.'</span>
			</div>
			</div>
			<div class="clear"></div>';
}
add_shortcode( 'finale_header', 'finale_header' );
// [finale_header title=""]







/* ============================================================================================== */
// ShoutOut
/* ============================================================================================== */
function finale_shoutout( $atts , $content = null ) {

	// Code
	return '<div class="one">
			<div class="content_segment last_segment"></div>
			</div>
			<div class="clear"></div>
			
			<div class="one center">
			<p class="summary_details_info">'.do_shortcode($content).'</p>
			</div>
			<div class="clear"></div>
			
			<div class="one">
			<div class="content_segment last_segment"></div>
			</div>
			<div class="clear"></div>';
}
add_shortcode( 'finale_shoutout', 'finale_shoutout' );
// [finale_shoutout]...[/finale_shoutout]






/* ============================================================================================== */
// Separator
/* ============================================================================================== */
function finale_separator() {

	// Code
	return '<div class="one">
			<div class="content_segment last_segment"></div>
			</div>
			<div class="clear"></div>';
}
add_shortcode( 'finale_separator', 'finale_separator' );
// [finale_separator]





/* ============================================================================================== */
// Button
/* ============================================================================================== */
function finale_button( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
		), $atts )
	);

	// Code
	return '<div class="one center">
				<div class="m_top_20 m_bottom_130">
					<a class="button get_in_touch rounded" href="'.$link.'">'.$content.'</a>
				</div>
			</div>
			<div class="clear"></div>';
}
add_shortcode( 'finale_button', 'finale_button' );
// [finale_button link=""]GET IT NOW[/finale_button]


?>