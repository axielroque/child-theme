<?php
/**
 * Hero ACF Register Block 
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

acf_register_block_type(
	array(
		'name'              => 'hero',
		'title'             => __( 'hero', 'child-twentytwentyone' ),
		'description'       => __( 'hero custom block', 'child-twentytwentyone' ),
		'render_template'   => '/blocks-acf/templates-blocks/block-template-loader.php',
		'category'          => GTB_BLOCK_CATEGORYHEROS, 
		'icon'              => array(
			'background' => $iconBackground,
			'foreground' => $iconForeground,
			'src'        => 'cover-image',
		),
		'keywords'          => array( 'hero', 'custom' ),
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
