<?php

return array(
	'id'          => 'portfolio_option',
	'types'       => array('portfolio'),
	'title'       => __('Portfolio Options', 'textdomain_finale'),
	'priority'    => 'high',
	'template'    => array(
				
				// Page Description
				array(
					'type' => 'textbox',
					'name' => 'portfolio_video',
					'label' => __('Video URL', 'textdomain_finale'),
					'description' => __('', 'textdomain_finale'),
					'default' => '',
					),
				// Page Description
				
	));

/**
 * EOF
 */