<?php

add_action( 'wp_enqueue_scripts', 'CUSTOM_scripts_method', 999);
function CUSTOM_scripts_method(){
    wp_enqueue_style( 'default', get_stylesheet_directory_uri() . '/css/default.css', array(), '0.0.6', 'all' );
    wp_enqueue_style( 'theme-menu', get_stylesheet_directory_uri() . '/css/theme-menu.css', array(), '0.0.6', 'all' );
    wp_enqueue_script( 'one', get_stylesheet_directory_uri() . '/js/custom_js.js', array('jquery'), '1.8.9');
};

/*

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide-rtl.js"></script>
		<script type="text/javascript">


*/


function new_excerpt_length($length) {
	return 7;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
	return '...';
});

add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'video' ) );

add_filter( 'avatar_defaults', 'add_default_avatar_option' );
function add_default_avatar_option( $avatars ){
	$url = get_stylesheet_directory_uri() . '/images/ven12.jpg';
	$avatars[ $url ] = 'Аватар сайта';
	return $avatars;
}

if (class_exists('MultiPostThumbnails')) {
 
    new MultiPostThumbnails(array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'post'
    ));
 }

if (class_exists('MultiPostThumbnails')) {
 
    new MultiPostThumbnails(array(
        'label' => 'Secondary Image_one',
        'id' => 'secondary-image_one',
        'post_type' => 'post'
    ));
 }

?>
