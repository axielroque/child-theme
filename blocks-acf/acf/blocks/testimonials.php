<?php
/* Testimonials*/
acf_register_block_type(array(
    'name'              => 'testimonials',
    'title'             => __('Testimonials'),
    'description'       => __('Testimonials custom blog'),
    'render_template' => '/blocks-acf/templates-blocks/block-template-loader.php',
    'category'          => GTB_BLOCK_CATEGORY_DEFAULT, 
    'icon' => array(
        'background' => $iconBackground,
        'foreground' => $iconForeground,
        'src' => 'awards',
    ),
    'keywords'          => array( 'Testimonials','custom'),
    'mode' => 'preview',
    'align'           => 'full',
    'supports'        => $supports,
    'example'         => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'gtb_preview_use_img' => true,
                'gtb_preview_img_ext' => 'png'
            ),
        ),
    ),
));