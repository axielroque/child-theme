<?php
/**
 * Load custom functions
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

/**
 * Load ACF settings.
 */
foreach ( glob( get_stylesheet_directory() . '/blocks-acf/acf/*.php' ) as $acf_settings ) {
	// phpcs:disable
	@include_once $acf_settings;
	// phpcs:enable
}

/**
 * Load the ACF Groups dynamically based on the field groups directory
 */
foreach ( glob( get_stylesheet_directory() . '/blocks-acf/acf/fields/*.php' ) as $acf_group ) {
	// phpcs:disable
	@include_once $acf_group;
	// phpcs:enable
}

/**
 * Load the ACF Custom functions dynamically
 */
foreach ( glob( get_stylesheet_directory() . '/functions/*.php' ) as $acf_group ) {
	// phpcs:disable
	@include_once $acf_group;
	// phpcs:enable
}

/**
 * Create the attributes required to build a image based ACF Gutenberg preview image.
 *
 * @param $block This is a custom $block register.
 * @return array
 */
// phpcs:disable
function gtb_block_preview( $block ): array {
	return is_null( get_field( 'gtb_preview_use_img' ) ) ||
	! get_field( 'gtb_preview_use_img' )
	? array(
		'is_preview' => false,
		'cover'      => '',
	)
	: array(
		'is_preview' => true,
		'cover'      => get_stylesheet_directory_uri() .
		sprintf(
			'/blocks-acf/block-preview/%s/%s.%s',
			$block['category'],
			$block['name'],
			is_null( get_field( 'gtb_preview_img_ext' ) )
				? 'png'
				: get_field( 'gtb_preview_img_ext' )
		),
	);
}
// phpcs:enable

/**
 * Load style css in blocks cms hook
 */
add_action( 'enqueue_block_editor_assets', 'mytheme_block_styles' );

/**
 * Load style css in blocks cms
 */
function mytheme_block_styles() {
	$the_theme    = wp_get_theme();
	$theme_styles = '/dist/main.css';

	wp_enqueue_style(
		'child-theme-styles',
		get_stylesheet_directory_uri() . $theme_styles,
		array(),
		$the_theme->get( 'Version' )
	);
}
