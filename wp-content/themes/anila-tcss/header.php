<!DOCTYPE html <?php language_attributes(); ?>>
<html>

<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <?php wp_head(); ?>
   
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="js/respond.src.js"></script>
        <script type="text/javascript" src="js/PIE.js"></script>
	<![endif]-->
</head>
<body>


    
    
    
    
<div class="home page_home center m_bottom_15" style="background:<?php echo vp_option('header_color'); ?> url(<?php 
					if( vp_metabox('page_option.page_header_image') != '' ){
					echo vp_metabox('page_option.page_header_image');
					}else{
					echo vp_option('default_header');
					}
					?>) no-repeat;">
        <div class="container"> 
        	
            <div class="logo">
                <?php if( vp_option('logo') != ''){ ?>
                <a href="index.html"><img src="<?php echo vp_option('logo'); ?>" alt="logo" /></a>
				<?php } ?>
            </div>
            
            
            <!-- Start Navigation Menu -->
            <?php get_template_part('nav'); ?>
            <!-- Start Navigation Menu -->
            
            <?php if( vp_metabox('page_option.page_title') != ''){ ?>
            <div class="one m_bottom_0">
                <h1 class="header"><?php echo vp_metabox('page_option.page_title'); ?></h1>
            </div>
            <?php } ?>
            
            <div class="one">
            <?php if( vp_metabox('page_option.page_desc') != ''){ ?>
                <h2 class="summary"><?php echo vp_metabox('page_option.page_desc'); ?></h2>
            <?php } ?>
            </div><!--end one-->
            <div class="clear"></div>
            
            <?php if( vp_metabox('page_option.page_button') != '' ){ ?>
            <a class="button do_not_click rounded" href="<?php echo vp_metabox('page_option.page_button_link'); ?>">
			<?php echo vp_metabox('page_option.page_button'); ?>
            </a>
            <?php } ?>
            
            <?php if( vp_metabox('page_option.page_title') == '' || vp_metabox('page_option.page_desc') == '' ){ ?>
            <div class="spacing-50"></div>
            <div class="clear"></div>
            <?php } ?>
            
        </div><!--end container-->    
    </div><!--end home-->
    <div class="clear"></div>
    
    <div class="spacing-50"></div>