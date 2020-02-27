<?php

// wp_enqueue_style( 'style', get_stylesheet_uri() );
function addStyleSheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'addStyleSheets');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
} 

// function bookstore_custom_header_setup() {
//     $defaults = array(
//         // Display the header text along with the image
//         'header-text'           => false,
//         // Header text color default
//         'default-text-color'        => '000',

//         );
// }
// add_action( 'after_setup_theme', 'bookstore_custom_header_setup' );

// function header_image() {
//     $image = get_header_image();
//     if ( $image ) {
//         echo esc_url( $image );
//     }
// }

function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

