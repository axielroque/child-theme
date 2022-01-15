<?php
/**
 * Define the list of available Gutenberg block categories slug as constants to avoid repeat strings in code to easy
 * future refactor.
 */
const GTB_BLOCK_CATEGORY_DEFAULT = 'custom_blocks';

const GTB_BLOCK_CATEGORY_HEROS = 'custom_blocks_heros';

const GTB_BLOCK_CATEGORY_SLIDER = 'custom_blocks_sliders';

/**
* ACF Custom Block Registry
*
*
* @package Idealcr theme
*/
function _s_add_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => GTB_BLOCK_CATEGORY_DEFAULT,
				'title' => esc_html__( 'Custom Blocks', '_s' ),
			),
            array(
                'slug'  => GTB_BLOCK_CATEGORY_HEROS,
                'title' => esc_html__( 'Custom Blocks - Heros', '_s' ),
            ),
            array(
                'slug'  => GTB_BLOCK_CATEGORY_SLIDER,
                'title' => esc_html__( 'Custom Blocks - Sliders', '_s' ),
            ),
		)
	);
}
add_filter( 'block_categories', '_s_add_block_categories', 10, 2 );

function register_acf_block_types() {
	//support align Blocks
    $supports = array(
        'align'  => array( 'wide', 'full' ),
        'anchor' => true,
	);
	$iconForeground = "#ffffff";
	$iconBackground = "#138496";

    /**
     * Load the block types dynamically based on the block types directory
     */
    foreach ( glob(get_stylesheet_directory() . '/blocks-acf/acf/blocks/*.php') as $acf_block_types) {
        @include_once $acf_block_types;
    }

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}