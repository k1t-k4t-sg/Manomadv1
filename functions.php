<?php

add_action( 'wp_enqueue_scripts', 'CUSTOM_scripts_method', 999);

function CUSTOM_scripts_method(){
    //wp_enqueue_style( 'style-name', get_stylesheet_directory_uri() . '/custom/css/custom_style.css', array(), '0.0.1', 'all' );
    wp_enqueue_script( 'one', get_stylesheet_directory_uri() . '/js/custom_js.js', array('jquery'), '0.0.1');
};

?>
