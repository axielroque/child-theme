<?php
/**
 * ACF Field for Time Line Block
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0 
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :
	acf_add_local_field_group(
		array(
			'key'                   => 'group_635eb9a5c6b45',
			'title'                 => 'Timeline',
			'fields'                => array(
				array(
					'key'               => 'field_635eb9a7a4689',
					'label'             => 'Time Line List',
					'name'              => 'time_line_list',
					'aria-label'        => '',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'layout'            => 'block',
					'pagination'        => 0,
					'min'               => 0,
					'max'               => 0,
					'collapsed'         => '',
					'button_label'      => 'Add Row',
					'rows_per_page'     => 20,
					'sub_fields'        => array(
						array(
							'key'               => 'field_635eb9c7a468a',
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
							'maxlength'         => 100,
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_635eb9a7a4689',
						),
						array(
							'key'               => 'field_635eb9d9a468b',
							'label'             => 'Description',
							'name'              => 'description',
							'aria-label'        => '',
							'type'              => 'textarea',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => 350,
							'rows'              => '',
							'placeholder'       => '',
							'new_lines'         => '',
							'parent_repeater'   => 'field_635eb9a7a4689',
						),
						array(
							'key'               => 'field_635ebfb441796',
							'label'             => 'Date',
							'name'              => 'date',
							'aria-label'        => '',
							'type'              => 'date_picker',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'display_format'    => 'F j, Y',
							'return_format'     => 'F j, Y',
							'first_day'         => 1,
							'parent_repeater'   => 'field_635eb9a7a4689',
						),
					),
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'block',
						'operator' => '==',
						'value'    => 'acf/timeline',
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
