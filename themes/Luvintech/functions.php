<?php 

/**
 * Luvintech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Luvintech theme
 */




/**
* Enqueue scripts and styles.
*/
function luvintech_theme_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );
 	// Theme's main stylesheet
 	wp_enqueue_style( 'luvintech-theme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

}
add_action( 'wp_enqueue_scripts', 'luvintech_theme_scripts' );

function luvintech_theme_config(){

	// Bootstrap Menu
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

	register_nav_menus(
		array(
			'luvintech_theme_main_menu'	=> esc_html__( 'Luvintech theme Main Menu', 'luvintech-theme' ),
			'luvintech_theme_footer_menu'	=> esc_html__( 'Luvintech theme Footer Menu', 'luvintech-theme' )
		)
	);

	$textdomain = 'luvintech-theme';
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );



	add_theme_support( 'custom-logo' , array(
		'height'		=> 63,
		'width'			=> 320,
		'flex_height'	=> true,
		'flex_width'	=> true
	) );

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'luvintech-theme-slider', 1920, 800, array( 'center', 'center' ) );
	add_image_size( 'luvintech-theme-blog', 960, 640, array( 'center', 'center' ) );

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}

	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'luvintech_theme_config', 0 );

//icones do menu
function add_fontawesome_icons() {
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_fontawesome_icons' );

function permitir_upload_ico($mime_types) {
    $mime_types['ico'] = 'image/x-icon';
    return $mime_types;
}
add_filter('upload_mimes', 'permitir_upload_ico');

add_action( 'widgets_init', 'luvintech_theme_sidebars' );
function luvintech_theme_sidebars(){
	register_sidebar( 
		array(
			'name'			=> esc_html__( 'Luvintech theme Main Sidebar', 'luvintech-theme' ),
			'id'			=> 'luvintech-theme-sidebar-1',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'luvintech-theme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);


	register_sidebar( 
		array(
			'name'			=> esc_html__( 'Footer Sidebar 1', 'luvintech-theme' ),
			'id'			=> 'luvintech-theme-sidebar-footer-1',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'luvintech-theme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);	

	register_sidebar( 
		array(
			'name'			=> esc_html__( 'Footer Sidebar 2', 'luvintech-theme' ),
			'id'			=> 'luvintech-theme-sidebar-footer-2',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'luvintech-theme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);

	register_sidebar( 
		array(
			'name'			=> esc_html__( 'Footer Sidebar 3', 'luvintech-theme' ),
			'id'			=> 'luvintech-theme-sidebar-footer-3',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'luvintech-theme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);			
}

function minha_tema_customizer_ocultar_titulo_home($wp_customize) {
    // Adiciona uma configuração
    $wp_customize->add_setting('ocultar_titulo_home', array(
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    // Adiciona um controle (checkbox) à seção EXISTENTE da página inicial
    $wp_customize->add_control('ocultar_titulo_home', array(
        'label'       => __('Ocultar o título da página inicial?', 'seu-tema'),
        'section'     => 'static_front_page', // <---- USANDO O ID ENCONTRADO
        'type'        => 'checkbox',
    ));
}
add_action('customize_register', 'minha_tema_customizer_ocultar_titulo_home');
