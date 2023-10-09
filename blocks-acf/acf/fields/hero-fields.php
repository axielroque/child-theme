<?php
/**
 * ACF Field for Hero Block
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :
	acf_add_local_field_group(
		array(
			'key'                   => 'group_635599f41ff10',
			'title'                 => 'Hero',
			'fields'                => array(
				array(
					'key'               => 'field_63559a0a4a915',
					'label'             => 'Hero Info',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'placement'         => 'top',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_63559a264a916',
					'label'             => 'Title',
					'name'              => 'title',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
				),
				array(
					'key'               => 'field_63559a344a917',
					'label'             => 'Description',
					'name'              => 'description',
					'aria-label'        => '',
					'type'              => 'wysiwyg',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'tabs'              => 'all',
					'toolbar'           => 'full',
					'media_upload'      => 1,
					'delay'             => 0,
				),
				array(
					'key'               => 'field_63559a434a918',
					'label'             => 'Image',
					'name'              => 'image',
					'aria-label'        => '',
					'type'              => 'image',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'array',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
					'preview_size'      => 'medium',
				),
				array(
					'key'               => 'field_63559a6092b4e',
					'label'             => 'Hero Config',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'placement'         => 'top',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_63559a7392b4f',
					'label'             => 'Mode',
					'name'              => 'mode',
					'aria-label'        => '',
					'type'              => 'button_group',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array(
						'dark'  => 'Dark',
						'light' => 'Light',
					),
					'default_value'     => 'dark',
					'return_format'     => 'value',
					'allow_null'        => 0,
					'layout'            => 'horizontal',
				),
				array(
					'key'               => 'field_63559ab281523',
					'label'             => 'Align Text',
					'name'              => 'align_text',
					'aria-label'        => '',
					'type'              => 'button_group',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array(
						'left'  => 'Left',
						'right' => 'Right',
					),
					'default_value'     => 'left',
					'return_format'     => 'value',
					'allow_null'        => 0,
					'layout'            => 'horizontal',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'block',
						'operator' => '==',
						'value'    => 'acf/hero',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
			'show_in_rest'          => 0,
		)
	);
endif;
