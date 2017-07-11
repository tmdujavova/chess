<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php
		wp_title('/', true, 'right'); bloginfo('name');
		if ( is_front_page() ) echo ' / ' . get_bloginfo('description'); ?>
	</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<header class="site-header">
		<nav class="container">
			<?php wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu',
				'container'       => false,
			) ) ?>
		</nav>
	</header>