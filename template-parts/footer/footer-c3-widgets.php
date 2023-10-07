<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if (is_active_sidebar('sidebar-3')): ?>

  <aside class="widget-area my-0 md:my-2 lg:col-span-1 flex flex-col gap-2">
		<?php dynamic_sidebar('sidebar-3'); ?>
	</aside><!-- .widget-area -->

	<?php endif;
