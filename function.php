<?php
/* enqueue scripts and style from parent theme */
function child_theme_enqueue_styles() {
    // Get the theme data.
	$the_theme = wp_get_theme();

    // Grab asset urls.
    $theme_styles  = "/assets/css/main.css";
    $theme_scripts = "/assets/js/main.js";

    wp_enqueue_style( 'child-theme-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-theme-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // wp_enqueue_style( 'child-style', 
    //     get_stylesheet_directory_uri() . '/assets/css/main.css', 
    //     array(), 
    //     wp_get_theme()->get('Version') 
    // );    

    //wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() . '/assets/css/main.css' );
    // wp_enqueue_script( 'child-theme-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true );

    // wp_localize_script( 'custom-scripts', 'ajax_object', array( 'ajaxurl' =>   admin_url( 'admin-ajax.php' ) ) );

}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles' );

// wp_enqueue_style( 'child-theme-css' );
// wp_enqueue_script( 'child-theme-js' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'simpletheme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
 * Loads javascript for showing customizer warning dialog.
 */
function _child_customize_controls_js() {
	wp_enqueue_script(
		'child-theme-js',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', '_child_customize_controls_js' );

//require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';