<?php ///Register Menus
function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_menus' );


//Enqueue CSS & JS

function emma_scripts() {
	/*Font Awesome*/
	// wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v6.1.2/css/all.css' );
	/*Basic Styles*/
	wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css', array(), '1.0.7' );
    /*JS*/
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/dist/theme.bundle.js', array(), '1.0.7', true);
}
add_action( 'wp_enqueue_scripts', 'emma_scripts' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

//Post Thumbnails support
add_theme_support( 'post-thumbnails' );

// ACF Field Groups support
include __DIR__ . '/fields/groups.php';

// ACF Block support
include __DIR__ . '/blocks/init.php';

// Kernl.us Updater
require 'kernl-update-checker/kernl-update-checker.php';
$MyUpdateChecker = Puc_v4_FactoryKernl::buildUpdateChecker(
    'https://kernl.us/api/v1/theme-updates/6314729669e16d6e9f3d4610/',
    __FILE__,
    'emmadeangelis'
);

add_action( 'admin_init', 'disable_autosave' );
function disable_autosave() {
	wp_deregister_script( 'autosave' );
}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        acf_add_options_page(array(
            'page_title'    => __('Site Settings'),
            'menu_title'    => __('Site Settings'),
            'menu_slug'     => 'site-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => 'emmas-rows',
		'title' => 'Emma\'s Rows'
	);

	return $categories;
} );
