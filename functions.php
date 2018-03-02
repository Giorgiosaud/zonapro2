<?php
require_once( 'wp-sass/wp-sass.php' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'scss-style', get_stylesheet_directory_uri() . '/scss/style.scss.php' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function child_rose_get_option( $name, $default=false, $media = false ){
  global $aq_theme_options;

  $name = rose_get_prefix( $name );

  if( isset( $aq_theme_options[ $name ] ) ){
    $value =  $aq_theme_options[ $name ];
    if( $media ){
      return $value['url'];
    }
    return $value;
  }

  return $default;
}
var_dump(child_rose_get_option('rose_logo'));