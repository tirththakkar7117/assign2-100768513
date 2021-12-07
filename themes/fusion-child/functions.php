<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function fusionchild_wp_enqueue_scripts() {
    $parenthandle = 'twentytwentyone-style';
    $theme        = wp_get_theme();
    wp_enqueue_style( 
        $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 
        'twentytwentyonechild-style', 
        get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
    wp_enqueue_style( 
        'foundation-style-css', 
        get_stylesheet_directory_uri() . '/assets/css/vendor/foundation.min.css'
    );
    wp_enqueue_style(
		'custom-style-css',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array( $parenthandle )
    );
    
}
add_action( 'wp_enqueue_scripts', 'fusionchild_wp_enqueue_scripts' );

//* Cutom Template Tags for this theme.
require get_stylesheet_directory() . '/inc/template-tags.php';

?>