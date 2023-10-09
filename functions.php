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

// Exit if accessed directly.  
defined( 'ABSPATH' ) || exit;

/**
 * Theme Support function
 */
function theme_support_function() {
	// add supports align for blocks in CMS!
	add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'theme_support_function' );

/**
 * Enqueue our stylesheet and javascript file
 */
function child_theme_enqueue_styles() {
	// Get the theme data.
	$the_theme = wp_get_theme();

	// Grab asset urls.
	$theme_styles  = '/dist/main.css';
	$theme_scripts = '/dist/main.js';

	wp_enqueue_style( 'child-theme-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-theme-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_localize_script( 'custom-scripts', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 99 );


/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( '_s', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// phpcs:disable
/**
 * Add Gutenberg blocks
*/
require_once __DIR__ . '/blocks-acf/config.php';
// phpcs:enable
