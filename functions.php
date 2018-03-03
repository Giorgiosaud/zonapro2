<?php
require_once( 'wp-sass/wp-sass.php' );
function my_theme_enqueue_styles() {
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'after_setup_theme', 'your_parent_theme_setup', 10 );
function your_parent_theme_setup() {    
	// global $aq_theme_options;
	
	wp_enqueue_style( 'scss-zonapro-style', get_stylesheet_directory_uri() . '/scss/style.scss.php' ,array('rose-main'));
	wp_enqueue_script( 'zonapro-scripts', get_stylesheet_directory_uri() . '/js/script.js' ,array('rose-functions'),false,true);

}

