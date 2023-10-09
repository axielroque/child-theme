<?php
/**
 * Testimonial ACF Register Block 
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

acf_register_block_type(
	array(
		'name'              => 'testimonials',
		'title'             => __( 'Testimonials', 'child-twentytwentyone' ),
		'description'       => __( 'Testimonials custom blog', 'child-twentytwentyone' ),
		'render_template'   => '/blocks-acf/templates-blocks/block-template-loader.php',
		'category'          => GTB_BLOCK_CATEGORYDEFAULT, 
		'icon'              => array(
			'background' => $iconBackground,
			'foreground' => $iconForeground,
			'src'        => 'awards',
		),
		'keywords'          => array( 'Testimonials', 'custom' ),
		'mode'              => 'preview',
		'align'             => 'full',
		'supports'          => $supports,
		'example'           => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gtb_preview_use_img' => true,
					'gtb_preview_img_ext' => 'png',
				),
			),
		),
	)
);
