<?php
/**
 * The template for the sidebar containing the WooCommerce shop widget area
 *
 * @package Luvintech theme
 */
?>
<?php if( is_active_sidebar( 'lll-theme-sidebar-shop' ) ): ?>
	<?php dynamic_sidebar( 'lll-theme-sidebar-shop' ) ?>
<?php endif;