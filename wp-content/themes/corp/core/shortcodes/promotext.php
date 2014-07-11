<?php

class promo_text
{

    public function register_shortcode($shortcodeName)
    {
        function shortcode_promo_text($atts, $content = null)
        {

            global $pbconfig;
            $compile = '';

            extract(shortcode_atts(array(
                'heading_size' => $pbconfig['default_heading_in_module'],
                'heading_color' => '',
                'heading_text' => '',
                'main_text' => '',
                'additional_text' => '',
                'button_text' => '',
                'button_link' => '',
            ), $atts));

            #heading
            if (strlen($heading_color) > 0) {
                $custom_color = "color:#{$heading_color};";
            }
            if (strlen($heading_text) > 0) {
                $compile .= "<div class='bg_title'><" . $heading_size . " style='" . (isset($custom_color) ? $custom_color : '') . "' class='headInModule'>{$heading_text}</" . $heading_size . "></div>";
            }

            /* ADD CLASS IF SOME FIELDS ARE EMPTY */
            $someClass = '';
            if ($additional_text=='') {$someClass .= " no_additional_text ";}
            if ($main_text=='') {$someClass .= " no_main_text ";}
            if ($button_text=='') {$someClass .= " no_button_text ";}
            if ($button_link=='') {$someClass .= " no_button_link ";}
            if ($main_text=='' && $additional_text=='') {$someClass .= " no_text ";}

            $compile .= '
			<div class="shortcode_promoblock '.$someClass.'">
			    <div class="row-fluid">
			        <div class="' . ((strlen($button_link) > 0 && strlen($button_text) > 0) ? 'span9' : 'span12') . ' promo_text_block">
                        ' . (isset($additional_text) ? "<h1>" . $main_text . "</h1>" : '') . '
                        ' . (isset($main_text) ? "<h5>" . $additional_text . "</h5>" : '') . '
			        </div>
			        ' . ((strlen($button_link) > 0 && strlen($button_text) > 0) ? '<div class="span3 promo_button_block"><a href="'.$button_link.'" class="promo_button">'.$button_text.'</a></div>' : '') . '
			    </div>
            ';

            $compile .= '<div class="clear"></div>
            </div>
			';

            return $compile;

        }

        add_shortcode($shortcodeName, 'shortcode_promo_text');
    }
}


#Shortcode name
$shortcodeName = "promo_text";


#Compile UI for admin panel
#Don't change this line
global $compileShortcodeUI;
$compileShortcodeUI .= "<div class='whatInsert whatInsert_" . $shortcodeName . "'>" . $defaultUI . "</div>";

#Your code
$compileShortcodeUI .= "
<table>
	<tr>
		<td>Title:</td>
		<td><input value='' type='text' class='" . $shortcodeName . "_title' name='" . $shortcodeName . "_title'></td>
	</tr>
	<tr>
		<td>URL:</td>
		<td><input value='' type='text' class='" . $shortcodeName . "_url' name='" . $shortcodeName . "_url'></td>
	</tr>
</table>

<script>
	function " . $shortcodeName . "_handler() {
	
		/* YOUR CODE HERE */
		var title = jQuery('." . $shortcodeName . "_title').val();
		var url = jQuery('." . $shortcodeName . "_url').val();
		
		/* END YOUR CODE */
	
		/* COMPILE SHORTCODE LINE */
		var compileline = '[" . $shortcodeName . " title=\"'+title+'\" url=\"'+url+'\"][/" . $shortcodeName . "]';
				
		/* DO NOT CHANGE THIS LINE */
		jQuery('.whatInsert_" . $shortcodeName . "').html(compileline);
	}
</script>

";


#Register shortcode & set parameters
$shortcode_promo_text = new promo_text();
$shortcode_promo_text->register_shortcode($shortcodeName);

#add shortcode to wysiwyg 
$shortcodesUI['promo_text'] = array("name" => $shortcodeName, "handler" => $compileShortcodeUI);

unset($compileShortcodeUI);

?>