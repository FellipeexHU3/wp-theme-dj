<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luvintech theme
 */
?>
		<footer><!-- 
			<section class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php if( is_active_sidebar( 'luvintech-theme-sidebar-footer-1' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'luvintech-theme-sidebar-footer-1' ); ?>
							</div>	
						<?php endif; ?>
						<?php if( is_active_sidebar( 'luvintech-theme-sidebar-footer-2' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'luvintech-theme-sidebar-footer-2' ); ?>
							</div>	
						<?php endif; ?>
						<?php if( is_active_sidebar( 'luvintech-theme-sidebar-footer-3' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'luvintech-theme-sidebar-footer-3' ); ?>
							</div>	
						<?php endif; ?>												
					</div>
				</div>
			</section> -->
			<section class="copyright">
				<div class="row">
					<div class="copyright-text col-12 col-md-6 col-xl-8">
						<p><?php echo esc_html( get_theme_mod( 'set_copyright', __( 'Copyright HU3-Luvintech All Rights Reserved', 'luvintech-theme' ) ) ); ?></p>
					</div>
					<div class="footer-menu col-12 col-md-6 col-xl-4 text-left text-md-right">
						<?php 
							wp_nav_menu(
								array(
									'theme_location'	=> 'luvintech_theme_footer_menu'
								)
							);
							?>
					</div>
				</div>				
			</section>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>