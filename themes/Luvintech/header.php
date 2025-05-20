<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luvintech theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
    <header>
        <section class="top-bar container-fluid">
            <nav class="main-menu navbar navbar-expand-md navbar-dark" role="navigation">
                <div class="navegacao">
                    <!-- LOGO -->
                    <div class="top-bar">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( has_custom_logo() ): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                                <span><?php bloginfo( 'description' ); ?></span>
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- BOTÃO HAMBURGUER -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'luvintech' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                                            <div class="topbar-direita">
                    <!-- MENU COLAPSADO -->
                    <div class="collapse navbar-collapse " id="main-menu">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'luvintech_theme_main_menu',
                                'depth'             => 3,
                                'container'         => false,
                                'menu_class'        => 'navbar-nav redes-sociais',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>

                        <!-- Itens de login/logout -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link" href="/pg-sobre">Sobre
                                    </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/pg-politicas">Catálogo
                                    </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/pg-politicas">Estrutura
                                    </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/pg-politicas">Contato
                                    </a>
                            </li>
                            <!-- <?php if ( is_user_logged_in() ): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url( admin_url( 'profile.php' ) ); ?>">
                                        <?php esc_html_e( 'My Account', 'luvintech' ); ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>">
                                        <?php esc_html_e( 'Logout', 'luvintech' ); ?>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url( wp_login_url() ); ?>">
                                        <?php esc_html_e( 'Login', 'luvintech' ); ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url( wp_registration_url() ); ?>">
                                        <?php esc_html_e( 'Register', 'luvintech' ); ?>
                                    </a>
                                </li>
                            <?php endif; ?> -->
                        </ul>
                        
                                                </div>
                </div>
            </nav>
        </section>
    </header>		