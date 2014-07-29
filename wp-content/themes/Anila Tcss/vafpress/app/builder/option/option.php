<?php

// Set Image Path
$imgpath = get_template_directory_uri().'/images/';
$vafpresspath = get_template_directory_uri().'/vafpress/public/img/';

// Start Options
return array(
	'title' => __('SmartPanel Options', 'textdomain_finale'),
	'page' => __('SmartPanel', 'textdomain_finale'),
	'logo' => '',
	'menus' => array(
	
	
	
			/* =============== Menu - General Settings ====================== */
			array(
			'title' => __('General Settings', 'textdomain_finale'),
			'name' => 'menu_1',
			'icon' => 'font-awesome:icon-gears',
			'controls' => array(
				
				// Start Logo Upload
					array(
						'type' => 'upload',
						'name' => 'logo',
						'label' => __('Upload Theme Logo', 'textdomain_finale'),
						'description' => __('Upload Your Theme Logo', 'textdomain_finale'),
						'default' => $imgpath.'logo.png',
					),
				// End Logo Upload
				
				// Start Default Header Image
					array(
						'type' => 'upload',
						'name' => 'default_header',
						'label' => __('Default Header Image', 'textdomain_finale'),
						'description' => __('If you dont upload a header image the default will be used.', 'textdomain_finale'),
						'default' => $imgpath.'default_header.jpg',
					),
				// End Default Header Image
				
				// Start Default Header Color
					array(
							'type' => 'color',
							'name' => 'header_color',
							'label' => __('Default Header Color', 'vp_textdomain'),
							'description' => __('If no image selected above then choose a default header color instead.', 'vp_textdomain'),
							'default' => '#252336',
					),
				// End Default Header Color
				
				// Start Footer Copyright
					array(
						'type' => 'textarea',
						'name' => 'copyright',
						'label' => __('Copyright Text', 'textdomain_finale'),
						'description' => __('Set your copyright notice', 'textdomain_finale'),
						'default' => 'Copyright Finale &copy; 2012. All Rights Reserved.',
					),
				// End Footer Copyright

						)),
			/* =============== Menu - General Settings ====================== */

			
			
			
			
			/* =============== Menu - Social Media Settings ====================== */
			array(
			'title' => __('Social Media Settings', 'textdomain_finale'),
			'name' => 'menu_5',
			'icon' => 'font-awesome:icon-group',
			'controls' => array(
					
				// Facebook
					array(
						'type' => 'textbox',
						'name' => 'facebook',
						'label' => __('Facebook page', 'textdomain_finale'),
						'description' => __('Enter your facebook URL', 'textdomain_finale'),
						'default' => '',
						'validation' => 'url',
					),
				// Facebook
				
				// Twitter
					array(
						'type' => 'textbox',
						'name' => 'twitter',
						'label' => __('Twitter Profile', 'textdomain_finale'),
						'description' => __('Enter your Twitter Profile URL', 'textdomain_finale'),
						'default' => '',
						'validation' => 'url',
					),
				// Twitter
				
				// Dribbble
					array(
						'type' => 'textbox',
						'name' => 'dribbble',
						'label' => __('Dribbble Profile', 'textdomain_finale'),
						'description' => __('Enter your dribbble profile', 'textdomain_finale'),
						'default' => '',
						'validation' => 'url',
					),
				// Dribbble
				
				// Behance
					array(
						'type' => 'textbox',
						'name' => 'behance',
						'label' => __('Behance Profile', 'textdomain_finale'),
						'description' => __('Enter your Behance profile', 'textdomain_finale'),
						'default' => '',
						'validation' => 'url',
					),
				// Behance
				
				// Flickr
					array(
						'type' => 'textbox',
						'name' => 'flickr',
						'label' => __('Flickr Album', 'textdomain_finale'),
						'description' => __('Enter your Flickr Album', 'textdomain_finale'),
						'default' => '',
						'validation' => 'url',
					),
				// Flickr
					)),
			/* =============== Menu - Social Media Settings ====================== */		


	)
);

/**
 *EOF
 */