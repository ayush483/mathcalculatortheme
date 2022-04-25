<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/custom.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );