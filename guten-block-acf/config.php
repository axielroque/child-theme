<?php
/**
 * Load custom function extend.
 */
/*
foreach (glob(get_template_directory() . '/blocks-acf/custom-functions/*.php') as $customFunctionExtend) {
    @include_once $customFunctionExtend;
} 
*/

/**
 * Load ACF settings.
 */
foreach (glob(get_template_directory() . '/blocks-acf/acf/*.php') as $acf_settings) {
    @include_once $acf_settings;
}

/**
 * Load the ACF Groups dynamically based on the field groups directory
 */
foreach (glob(get_template_directory() . '/blocks-acf/acf/fields/*.php') as $acf_group) {
    @include_once $acf_group;
}


/**
 * Create the attributes required to build a image based ACF Gutenberg preview image.
 *
 * @param $block
 * @return array
 */
function gtb_block_preview($block): array
{
    return is_null(get_field('gtb_preview_use_img')) || !get_field('gtb_preview_use_img') ?
        array(
            'is_preview' => false,
            'cover' => ''
        ) :
        array(
            'is_preview' => true,
            'cover' => get_template_directory_uri() . sprintf('/blocks-acf/block-preview/%s/%s.%s',
                    $block['category'],
                    $block['name'],
                    is_null(get_field('gtb_preview_img_ext')) ? 'png' : get_field('gtb_preview_img_ext')
                )
        );
}


// add supports align for blocks in CMS
add_theme_support('align-wide');
/**
 * load style css in blocks cms
 */
add_action('enqueue_block_editor_assets', 'mytheme_block_styles');
function mytheme_block_styles()
{
    wp_enqueue_style('block-styles', get_template_directory_uri() . '/css/theme.min.css' );
    wp_enqueue_script('block-script', get_template_directory_uri() . '/js/theme.min.js', array('jquery'), '', true );
    
}