<?php
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group([
    'key' => 'group_651f8e91d8cbb',
    'title' => 'Theme Setting',
    'fields' => [
      [
        'key' => 'field_651f8e9205250',
        'label' => 'Footer',
        'name' => '',
        'aria-label' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => [
          'width' => '',
          'class' => '',
          'id' => '',
        ],
        'placement' => 'top',
        'endpoint' => 0,
      ],
      [
        'key' => 'field_651f8eb505251',
        'label' => 'Facebook',
        'name' => 'facebook',
        'aria-label' => '',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => [
          'width' => '',
          'class' => '',
          'id' => '',
        ],
        'default_value' => '',
        'placeholder' => '',
      ],
      [
        'key' => 'field_651f8f1e05252',
        'label' => 'Instagram',
        'name' => 'instagram',
        'aria-label' => '',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => [
          'width' => '',
          'class' => '',
          'id' => '',
        ],
        'default_value' => '',
        'placeholder' => '',
      ],
      [
        'key' => 'field_651f8f3105253',
        'label' => 'Twitter',
        'name' => 'twitter',
        'aria-label' => '',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => [
          'width' => '',
          'class' => '',
          'id' => '',
        ],
        'default_value' => '',
        'placeholder' => '',
      ],
      [
        'key' => 'field_651f8f4105254',
        'label' => 'LinkedIn',
        'name' => 'linkedin',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => [
          'width' => '',
          'class' => '',
          'id' => '',
        ],
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-configuration',
        ],
      ],
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ]);
});
