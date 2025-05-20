<?php
/**
 * The template for displaying search results pages
 *
 * @package Luvintech theme
 */

get_header(); ?>

		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">

						<h1><?php esc_html_e( 'Search results for', 'luvintech-theme' ); ?>: <?php echo get_search_query(); ?></h1>

						<?php 

							get_search_form();

							if( have_posts() ):
								while( have_posts() ): the_post();

									get_template_part( 'template-parts/content', 'search' );

								endwhile;
								the_posts_pagination( array(
									'prev_text'		=> esc_html__( 'Previous', 'luvintech-theme' ),
									'next_text'		=> esc_html__( 'Next', 'luvintech-theme' ),
								));
							else: 
								?>
								<p><?php esc_html_e( 'There are no results for your query.', 'luvintech-theme' ); ?></p>
								<?php
							endif;
						?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>