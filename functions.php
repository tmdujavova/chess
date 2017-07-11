<?php

/**
 * Theme Support
 */
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'custom-background' );

/**
 * Menus
  */
	register_nav_menus(array(
		'primary' => 'Primary Menu',
	));


/**
 * Sidebars & Widgets
 */

// enable shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );

// register sidebars
add_action( 'widgets_init', 'chess_widgets_init' );
function chess_widgets_init()
{
	register_sidebar( array(
		'name'          => 'Udalosti Sidebar',
		'id'            => 'sidebar-primary',
		'description'   => 'Zoznam najbližších udalostí',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}


/**
 * Shortcodes
 */
add_shortcode('udalost', 'chess_udalost_shortcode');
function chess_udalost_shortcode( $atts )
{

	$html  = '<div class="udalost"><div class="datum">';
	$html .= 	$atts['cislo'];
	$html .= '</br>';
	$html .= 	$atts['den'];
	$html .= '</div>';
	$html .= 	$atts['text'];
	$html .= '</div>';

	return $html;
}
