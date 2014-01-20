<!DOCTYPE html>
<html>

	<head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>"/>
        <meta name="author" content="Julian Magossi"/>
        <meta name="copyright" content="Copyright (c) 2014"/>
        
        <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
        
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>"/>

	</head>
	
	<body <?php body_class($class); ?>>
        <header class="topo wbase">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" /></a>
			</div>
			<div class="menu">
				<nav class="page-align">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</div>
        </header>
        