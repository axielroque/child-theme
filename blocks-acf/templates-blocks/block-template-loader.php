<?php
/**
 * Gutenberg Block Preview Template Loader. This component loads the block template based on the component name.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * 
 * If the component is try to be rendered by the ajax preview method, the component renders the block image preview,
 * based on the name conventions.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param   (int|string) $post_id The post ID this block is saved to. 
 */

$gtb_block_dir_name = str_replace( 'acf/', '', $block['name'] );
$block_preview      = gtb_block_preview( $block ); ?>
<?php if ( $block_preview['is_preview'] ) : ?>
<div data="gutenberg-preview-img"><img src="<?php echo $block_preview['cover']; ?>"></div>
<?php else : ?>
	<?php 
		// phpcs:disable
		@include __DIR__ . '/' . $gtb_block_dir_name . '/index.php'; 
		// phpcs:enable
	?>
<?php endif; ?>
