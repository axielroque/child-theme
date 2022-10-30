<?php
/* Time Line */
acf_register_block_type([
  'name' => 'timeline',
  'title' => __('Time line'),
  'description' => __('Time line custom blog'),
  'render_template' => '/blocks-acf/templates-blocks/block-template-loader.php',
  'category' => GTB_BLOCK_CATEGORY_DEFAULT,
  'icon' => [
    'background' => $iconBackground,
    'foreground' => $iconForeground,
    'src' => 'list-view',
  ],
  'keywords' => ['time_line', 'custom'],
  'mode' => 'preview',
  'align' => 'full',
  'supports' => $supports,
  'example' => [
    'attributes' => [
      'mode' => 'preview',
      'data' => [
        'gtb_preview_use_img' => true,
        'gtb_preview_img_ext' => 'png',
      ],
    ],
  ],
]);
