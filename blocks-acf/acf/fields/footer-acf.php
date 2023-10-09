<?php
/**
 * ACF Field for Footer option page
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :
	acf_add_local_field_group(
		array(
			'key'                   => 'group_651f8e91d8cbb',
			'title'                 => 'Theme Setting',
			'fields'                => array(
				array(
					'key'               => 'field_651f8e9205250',
					'label'             => 'Footer',
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
					'key'               => 'field_651f8eb505251',
					'label'             => 'Facebook',
					'name'              => 'facebook',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_651f8f1e05252',
					'label'             => 'Instagram',
					'name'              => 'instagram',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_651f8f3105253',
					'label'             => 'Twitter',
					'name'              => 'twitter',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_651f8f4105254',
					'label'             => 'LinkedIn',
					'name'              => 'linkedin',
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
			),
			'location'              => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-configuration',
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
