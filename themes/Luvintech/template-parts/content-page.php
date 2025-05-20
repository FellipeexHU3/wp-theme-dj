<?php
/**
 * The template part for displaying page content in page.php
 *
 * @package Luvintech theme
 */
?>
<?php if ( is_front_page() ): ?>
<article class="banner-full">
<?php else: ?>
<article class="container bg-transp">
<?php endif; ?>
    <?php if ( ! is_front_page() || ! get_theme_mod( 'ocultar_titulo_home' ) ): ?>
        <h1><?php the_title(); ?></h1>
    <?php endif; ?>
    <?php the_content(); ?>
    <?php if( comments_open() || get_comments_number() ): ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</article>