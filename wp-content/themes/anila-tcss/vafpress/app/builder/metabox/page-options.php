<?php

return array(
	'id'          => 'page_option',
	'types'       => array('page','post'),
	'title'       => __('Page Options', 'textdomain_finale'),
	'priority'    => 'high',
	'template'    => array(
				
				// Page Title
				array(
					'type' => 'textbox',
					'name' => 'page_title',
					'label' => __('Page Title', 'textdomain_finale'),
					'description' => __('', 'textdomain_finale'),
					'default' => '',
					),
				// Page Title
				
				// Page Description
				array(
					'type' => 'textarea',
					'name' => 'page_desc',
					'label' => __('Page Description', 'textdomain_finale'),
					'description' => __('', 'textdomain_finale'),
					'default' => '',
					),
				// Page Description
				
				// Page Background
					array(
						'type' => 'upload',
						'name' => 'page_header_image',
						'label' => __('Header Image', 'textdomain_topbest'),
						'description' => __('', 'textdomain_topbest'),
						'default' => '',
					),
				// Page Background
				
				// Page Button
				array(
					'type' => 'textbox',
					'name' => 'page_button',
					'label' => __('Button', 'textdomain_finale'),
					'description' => __('', 'textdomain_finale'),
					'default' => '',
					),
				// Page Button
				
				// Button Link
				array(
					'type' => 'textbox',
					'name' => 'page_button_link',
					'label' => __('Button Link', 'textdomain_finale'),
					'description' => __('', 'textdomain_finale'),
					'default' => 'http://',
					),
				// Button Link
				
	));

/**
 * EOF
 */