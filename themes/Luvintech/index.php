<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			<main>
                <img src="http://localhost/wp-content/uploads/2025/05/contorno-1.png" alt="" class="bg-image-custom bg-img1">
                <img src="http://localhost/wp-content/uploads/2025/05/contorno-1.png" alt="" class="bg-image-custom bg-img2">	
                <div class="banner">
                    <div class="banner-texto col-12 col-lg-6 col-xl-8 col-xxl-9">
                        <p>
                            Eleve sua <span class="destaque sombra-cima">FESTA</span>
                            a um outro patamar, faça deste momento uma experiência
                            <span class="destaque sombra-baixo">INESQUECÍVEL</span>
                        </p>
                        <p class="cor-primaria destaque">/////////////////</p><br>
                        <button type="button" class="btn btn-outline-primary destaque">Saiba Mais</button>    
                    </div>
                    <div class="banner-imagem col-12 col-lg-6 col-xl-4 col-xxl-3">
                        <img src="http://localhost/wp-content/uploads/dj-banner.png" alt="DJ">
                    </div>
                </div>
			</main>
		</div>
<?php get_footer(); ?>