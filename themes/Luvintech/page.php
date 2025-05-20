<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luvintech theme
 */

get_header();
?>
		<div class="bg-itens">
			<video autoplay loop muted playsinline id="bg-video">
				<source src="http://localhost/wp-content/uploads/videobg.webm" type="video/webm">
			</video>
			<img src="http://localhost/wp-content/uploads/2025/05/contorno-1.png" alt="" class="bg-image-custom bg-img1">
					<img src="http://localhost/wp-content/uploads/2025/05/contorno-1.png" alt="" class="bg-image-custom bg-img2">
			<main>	
					<?php while( have_posts() ): the_post();							
						get_template_part( 'template-parts/content', 'page' );
					endwhile;?>
			</main>
		</div>
<?php get_footer(); ?>