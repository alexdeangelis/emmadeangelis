<?php ///Register Menus
function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_menus' );


//Enqueue CSS & JS

function your_scripts() {
	/*Bootstrap 5*/
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
	/*Font Awesome*/
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v6.1.2/css/all.css' );
	/*Basic Styles*/
	wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '1.0.0' );
	/*Bootstrap JS*/
	wp_enqueue_script('bootstrap-js-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'your_scripts' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

//Post Thumbnails support
add_theme_support( 'post-thumbnails' );

// Kernl.us Updater
require 'kernl-update-checker/kernl-update-checker.php';
$MyUpdateChecker = Puc_v4_FactoryKernl::buildUpdateChecker(
    'https://kernl.us/api/v1/theme-updates/6314729669e16d6e9f3d4610/',
    __FILE__,
    'emmadeangelis'
);