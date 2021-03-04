<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'SUNSHINE_DIR_URI' ) ) {
	define( 'SUNSHINE_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'SUNSHINE_DIR_ASSETS_URI' ) ) {
	define( 'SUNSHINE_DIR_ASSETS_URI', SUNSHINE_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'SUNSHINE_DIR_CSS_URI' ) ) {
	define( 'SUNSHINE_DIR_CSS_URI', SUNSHINE_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'SUNSHINE_DIR_JS_URI' ) ) {
	define( 'SUNSHINE_DIR_JS_URI', SUNSHINE_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'SUNSHINE_DIR_IMGS_URI' ) ) {
	define( 'SUNSHINE_DIR_IMGS_URI', SUNSHINE_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'SUNSHINE_DIR_ICON_IMG_URI' ) ) {
	define( 'SUNSHINE_DIR_ICON_IMG_URI', SUNSHINE_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'SUNSHINE_DIR_PATH' ) ) {
	define( 'SUNSHINE_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'SUNSHINE_DIR_PATH_INC' ) ) {
	define( 'SUNSHINE_DIR_PATH_INC', SUNSHINE_DIR_PATH . 'inc/' );
}

//Sunshine Libraries Folder Directory
if ( ! defined( 'SUNSHINE_DIR_PATH_LIBS' ) ) {
	define( 'SUNSHINE_DIR_PATH_LIBS', SUNSHINE_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'SUNSHINE_DIR_PATH_CLASSES' ) ) {
	define( 'SUNSHINE_DIR_PATH_CLASSES', SUNSHINE_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'SUNSHINE_DIR_PATH_HOOKS' ) ) {
	define( 'SUNSHINE_DIR_PATH_HOOKS', SUNSHINE_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function sunshine_admin_script(){
    wp_enqueue_style( 'sunshine-admin', get_template_directory_uri().'/assets/css/sunshine-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'sunshine_admin', get_template_directory_uri().'/assets/js/sunshine-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'sunshine_admin_script' );



/**
 * Include File
 *
 */
require_once( SUNSHINE_DIR_PATH_INC . 'sunshine-breadcrumbs.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'sunshine-widgets-reg.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'post-like.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'sunshine-functions.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'sunshine-commoncss.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'support-functions.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( SUNSHINE_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( SUNSHINE_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( SUNSHINE_DIR_PATH_HOOKS . 'hooks.php' );
require_once( SUNSHINE_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( SUNSHINE_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Sunshine object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Sunshine = new Sunshine();