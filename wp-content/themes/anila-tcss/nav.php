<div id="main_menu">
    <div class="menu_wrapper"> 
    	<nav>

<?php if( has_nav_menu('header_menu') ){ ?>

	<?php wp_nav_menu( array(
		  	'theme_location' => 'header_menu',
			'container' => 'false',
			'items_wrap' => '<ul id="nav_menu">%3$s</ul>',
	)); ?>
	
<?php }else{ ?>

Please Setup your nav menu <a href="wp-admin/nav-menus.php" style="text-transform:uppercase;">Click here</a>

<?php } ?>

    	</nav>
    </div>
</div>