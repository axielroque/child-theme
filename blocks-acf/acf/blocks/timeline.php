<?php
/**
 * Time Line ACF Register Block 
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

acf_register_block_type(
	array(
		'name'            => 'timeline',
		'title'           => __( 'Time line', 'child-twentytwentyone' ),
		'description'     => __( 'Time line custom blog', 'child-twentytwentyone' ),
		'render_template' => '/blocks-acf/templates-blocks/block-template-loader.php',
		'category'        => GTB_BLOCK_CATEGORYDEFAULT,
		'icon'            => array(
			'background' => $iconBackground,
			'foreground' => $iconForeground,
			'src'        => 'list-view',
		),
		'keywords'        => array( 'time_line', 'custom' ),
		'mode'            => 'preview',
		'align'           => 'full',
		'supports'        => $supports,
		'example'         => array(
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
