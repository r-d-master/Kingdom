<?php

#tab
function tab($atts, $content = null) {
	extract( shortcode_atts( array(
        'title' => 'Title',
        'expanded_state' => '',
	), $atts ) );
	
		return "<div class='shortcode_tab_item_title expand_".$expanded_state."'>".$title."</div><div class='shortcode_tab_item_body tab-content clearfix'><div class='ip'><p>".$content."</p></div></div>";

	}
add_shortcode('tab', 'tab');



class shortcode_tabs {

	public function register_shortcode($shortcodeName) {
		function shortcode_tabs($atts, $content = null) {

            global $pbconfig;
            if (!isset($compile)) {$compile='';}

			extract( shortcode_atts( array(
                'heading_size' => $pbconfig['default_heading_in_module'],
                'heading_color' => '',
                'heading_text' => '',
                'tab_type' => 'type1',
			), $atts ) );

            #heading
            if (strlen($heading_color)>0) {$custom_color = "color:#{$heading_color};";}
            if (strlen($heading_text)>0) {
                $compile .= "<div class='bg_title'><".$heading_size." style='".(isset($custom_color) ? $custom_color : '')."' class='headInModule'>{$heading_text}</".$heading_size."></div>";
            }

			$compile .= "
			<div class='shortcode_tabs ".$tab_type."'>
			    <div class='all_heads_cont'></div>
			    <div class='all_body_cont'></div>
			    ".do_shortcode($content)."
			</div>
			";

			return $compile;
		}
		add_shortcode($shortcodeName, 'shortcode_tabs');
	}
}




#Shortcode name
$shortcodeName="tabs";


#Compile UI for admin panel
#Don't change this line
global $compileShortcodeUI;
$compileShortcodeUI .= "<div class='whatInsert whatInsert_".$shortcodeName."'>".$defaultUI."</div>";

#Your code
$compileShortcodeUI .= "
This shortocode comes with no parameters.

<script>
	function ".$shortcodeName."_handler() {

		/* YOUR CODE HERE */

		/* END YOUR CODE */

		/* COMPILE SHORTCODE LINE */
		var compileline = '[".$shortcodeName."][tab title=\"some title here\"]some text here[/tab][tab title=\"some title here\"]some text here[/tab][tab title=\"some title here\"]some text here[/tab][/".$shortcodeName."]';

		/* DO NOT CHANGE THIS LINE */
		jQuery('.whatInsert_".$shortcodeName."').html(compileline);
	}
</script>

";






#Register shortcode & set parameters
$tabs = new shortcode_tabs();
$tabs->register_shortcode($shortcodeName);

#add shortcode to wysiwyg
#$shortcodesUI['tabs'] = array("name" => $shortcodeName, "handler" => $compileShortcodeUI);

unset($compileShortcodeUI);

?>