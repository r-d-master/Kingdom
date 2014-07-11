<?php

class dropcaps {

	public function register_shortcode($shortcodeName) {
		function shortcode_dropcaps($atts, $content = null) {
			extract( shortcode_atts( array(
			  'class' => '',
			  'type' => '',
			), $atts ) );

			$strlen = strlen($content) - 1;
			$firstLetter = substr($content, 0, 1);

			return "<span class='dropcap ".$type."'>".$firstLetter."</span>".substr($content, 1, $strlen);
		}
		add_shortcode($shortcodeName, 'shortcode_dropcaps');  
	}
}




#Shortcode name
$shortcodeName="dropcaps";

global $pbconfig;

#Compile UI for admin panel
#Don't change this line
global $compileShortcodeUI;
$compileShortcodeUI .= "<div class='whatInsert whatInsert_".$shortcodeName."'>".$defaultUI."</div>";

#This function is executed each time when you click "Insert" shortcode button.
$compileShortcodeUI .= "
<table>
	<tr>
		<td>Type:</td>
		<td>
		    <select style='' name='".$shortcodeName."_type' class='".$shortcodeName."_type'>";

            if (is_array($pbconfig['all_available_dropcaps'])) {
                foreach ($pbconfig['all_available_dropcaps'] as $value => $caption) {
                    $compileShortcodeUI .= "<option value='".$value."'>".$caption."</option>";
                }
            }

            $compileShortcodeUI .= "</select>
        </td>
	</tr>
</table>

<div style='float:left;clear:both;line-height:27px;'></div>


<script>
	function ".$shortcodeName."_handler() {
	
		/* YOUR CODE HERE */
		
		var type = jQuery('.".$shortcodeName."_type').val();
		
		/* END YOUR CODE */
	
		/* COMPILE SHORTCODE LINE */
		var compileline = '[".$shortcodeName." type=\"'+type+'\"][/".$shortcodeName."]';
				
		/* DO NOT CHANGE THIS LINE */
		jQuery('.whatInsert_".$shortcodeName."').html(compileline);
	}
</script>

";






#Register shortcode & set parameters
$dropcaps = new dropcaps();
$dropcaps->register_shortcode($shortcodeName);

#add shortcode to wysiwyg 
$shortcodesUI['dropcaps'] = array("name" => $shortcodeName, "handler" => $compileShortcodeUI);

unset($compileShortcodeUI);


?>