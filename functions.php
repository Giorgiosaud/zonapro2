<?php
require_once( 'wp-sass/wp-sass.php' );
function my_theme_enqueue_styles() {
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'after_setup_theme', 'your_parent_theme_setup', 9 );
function your_parent_theme_setup() {    
	die(var_dump(rose_get_option('custom-css','')));
	wp_enqueue_style( 'scss-style', get_stylesheet_directory_uri() . '/scss/style.scss.php' ,array('rose-main'));

}

