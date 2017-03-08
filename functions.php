<?php

add_action( 'wp_enqueue_scripts', 'CUSTOM_scripts_method', 999);
function CUSTOM_scripts_method(){
    wp_enqueue_style( 'default', get_stylesheet_directory_uri() . '/css/default.css', array(), '0.0.1', 'all' );
    wp_enqueue_style( 'theme-menu', get_stylesheet_directory_uri() . '/css/theme-menu.css', array(), '0.0.1', 'all' );
    wp_enqueue_script( 'one', get_stylesheet_directory_uri() . '/js/custom_js.js', array('jquery'), '0.0.1');
};


function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
	return '...';
});

add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'video' ) );

?>
