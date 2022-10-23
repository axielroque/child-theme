<?php
/* hero*/
acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('hero'),
    'description'       => __('hero custom block'),
    'render_template' => '/blocks-acf/templates-blocks/block-template-loader.php',
    'category'          => GTB_BLOCK_CATEGORY_HEROS, 
    'icon' => array(
        'background' => $iconBackground,
        'foreground' => $iconForeground,
        'src' => 'cover-image',
    ),
    'keywords'          => array( 'hero','custom'),
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