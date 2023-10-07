<?php
/** Register custom theme option page acf
 *
 *
 */

add_action('acf/init', function () {
  acf_add_options_page([
    'page_title' => 'Theme Configuration',
    'menu_slug' => 'theme-configuration',
    'parent_slug' => 'themes.php',
    'position' => 2,
    'redirect' => false,
  ]);
});
