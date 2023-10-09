<?php
/**
 * Custom block register file and load custom config
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

// phpcs:ignoreFile
/**
 * Define the list of available Gutenberg block categories slug as constants to avoid repeat strings in code to easy
 */
const GTB_BLOCK_CATEGORYDEFAULT = 'custom_blocks';
const GTB_BLOCK_CATEGORYHEROS   = 'custom_blocks_heros';
const GTB_BLOCK_CATEGORYSLIDER  = 'custom_blockssliders';

/**
 * ACF Custom Block Registry
 */
function child_add_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => GTB_BLOCK_CATEGORYDEFAULT,
				'title' => esc_html__( 'Custom Blocks', 'child-twentytwentyone' ),
			),
			array(
				'slug'  => GTB_BLOCK_CATEGORYHEROS,
				'title' => esc_html__( 'Custom Blocks - Heros', 'child-twentytwentyone' ),
			),
			array(
				'slug'  => GTB_BLOCK_CATEGORYSLIDER,
				'title' => esc_html__( 'Custom Blocks - Sliders', 'child-twentytwentyone' ),
			),
		)
	);
}
add_filter( 'block_categories', 'child_add_block_categories', 10, 2 );

function register_acf_block_types() {
	// support align Blocks
	$supports       = array(
		'align'  => array( 'wide', 'full' ),
		'anchor' => true,
	);
	$iconForeground = '#ffffff';
	$iconBackground = '#138496';

	/**
	 * Load the block types dynamically based on the block types directory
	 */
	foreach ( glob( get_stylesheet_directory() . '/blocks-acf/acf/blocks/*.php' ) as $acf_block_types ) {
		@include_once $acf_block_types;
	}

}

/** 
 *  Check if function exists and hook into setup.
 */
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}
