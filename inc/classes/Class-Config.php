<?php
/**
 * @Packge       : Sunshine
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author URI 	 : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Final Class
final class Sunshine {

	// Theme Version
	private $sunshine_version = '1.0';

	// Minimum WordPress Version required
	private $min_wp = '5.0';

	// Minimum PHP version required
	private $min_php = '7.0';

	function __construct(){

		// After setup theme
		add_action( 'after_setup_theme', array( $this, 'support' ) );
		// elementor flag
		add_action( 'after_switch_theme', array( $this, 'set_elementor_flag' ) );
		// Enqueue elementor theme default style 
		add_action( 'elementor/frontend/after_enqueue_styles', array( $this, 'enqueue_elementor_theme_default_style' ) );
		// Enqueue elementor notice script
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_elementor_notice_script' ) );
		// Elementor disable default style
		add_action( 'wp_ajax_elementor_desiable_default_style' , array( $this, 'elementor_desiable_default_style' ) );
		// initialize theme flag
		$this->init();

	}
	// Theme init
	public function init() {

		$this->setup();

		// customizer init Instantiate
		$this->customizer_init();
		

	}

	// Theme setup
	private function setup() {

		// Create enqueue class instance
		$enqueu          = new sunshine_Enqueue();
		$enqueu->scripts = $this->enqueue();
		$enqueu->sunshine_scripts_enqueue_init();


	}

	// Theme Support
	public function support() {
		// content width
		$GLOBALS['content_width'] = apply_filters( 'sunshine_content_width', 751 );


		// text domain for translation.
		load_theme_textdomain( 'sunshine', SUNSHINE_DIR_PATH . '/languages' );

		// support title tage
		add_theme_support( 'title-tag' );

		// support logo
		add_theme_support( 'custom-logo', array(
			'height'      => 57,
			'width'       => 190,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		//  support post format
		add_theme_support( 'post-formats', array( 'video', 'audio' ) );

		// support post-thumbnails
		add_theme_support( 'post-thumbnails', array( 'post' ) );

		// Site logo size
		add_image_size( 'sunshine_site_logo_190x57', 190, 57, true );

		// Hero thumb size
		add_image_size( 'sunshine_hero_thumb_1820x800', 1820, 800, true );

		// Wedding counter thumb size
		add_image_size( 'sunshine_wedding_counter_right_img_188x216', 188, 216, true );
		// add_image_size( 'sunshine_wedding_counter_bg_img_1146x290', 1146, 290, true );
		add_image_size( 'sunshine_wedding_counter_left_img_471x280', 471, 280, true );

		// Love story thumb size
		add_image_size( 'sunshine_love_story_thumb_247x247', 247, 247, true );

		// Gallery thumb size
		add_image_size( 'sunshine_gallery_thumb_601x410', 601, 410, true );
		add_image_size( 'sunshine_gallery_thumb_482x410', 482, 410, true );
		add_image_size( 'sunshine_gallery_thumb_721x410', 721, 410, true );

		// Program details thumb size
		add_image_size( 'sunshine_program_bg_thumb_362x450', 362, 450, true );

		// Attending thumb size
		add_image_size( 'sunshine_attending_bottom_thumb_350x346', 350, 346, true );

		// Latest post thumbnail size
		add_image_size( 'sunshine_widget_post_thumb', 80, 80, true );

		// Single blog post image size
		add_image_size( 'sunshine_single_blog_750x375', 750, 375, true );
		add_image_size( 'sunshine_np_thumb', 60, 60, true );

		// support custom background
		add_theme_support( 'custom-background', array(
			'default-color' => '#fff',
		) );

		// support custom header
		add_theme_support( 'custom-header', array(
			'default-image'      => get_template_directory_uri() . '/assets/img/breadcrumb.png',
			'width'              => 1820,
			'height'             => 500,
			'flex-width'         => true,
			'flex-height'        => true,
		) );

		// support automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// support html5
		add_theme_support( 'html5' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// register nav menu
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary Menu', 'sunshine' ),
			'footer-menu'  => esc_html__( 'Footer Menu', 'sunshine' ),
		) );

		// editor style
		add_editor_style( 'assets/css/editor-style.css' );

	} // end support method

	// enqueue theme style and script
	private function enqueue() {

		$cssPath = SUNSHINE_DIR_CSS_URI;
		$jsPath  = SUNSHINE_DIR_JS_URI;
		
		$scripts = array(
			'style'   => array(
				array(
					'handler' => 'sunshine-wedding-google-font',
					'file'    => $this->google_font(),
				),
				array(
					'handler'    => 'sunshine-wedding-bootstrap-css',
					'file'       => $cssPath . 'bootstrap.min.css',
					'dependency' => array(),
					'version'    => '5.3.8-5',
				),
				array(
					'handler'    => 'sunshine-wedding-owl-carousel-css',
					'file'       => $cssPath . 'owl.carousel.min.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-magnific-popup-css',
					'file'       => $cssPath . 'magnific-popup.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-font-awesome',
					'file'       => $cssPath . 'font-awesome.min.css',
					'dependency' => array(),
					'version'    => '7.3.1-1',
				),
				array(
					'handler'    => 'sunshine-wedding-themify-icons',
					'file'       => $cssPath . 'themify-icons.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-nice-select-css',
					'file'       => $cssPath . 'nice-select.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-flaticon-css',
					'file'       => $cssPath . 'flaticon.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-gijgo-css',
					'file'       => $cssPath . 'gijgo.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-slicknav-css',
					'file'       => $cssPath . 'slicknav.css',
					'dependency' => array(),
					'version'    => '1.0',
				),
				array(
					'handler'    => 'sunshine-wedding-main-style',
					'file'       => $cssPath . 'style.css',
					'dependency' => array(),
					'version'    => $this->sunshine_version,
				),
				array(
					'handler' => 'sunshine-wedding-sunshine-style',
					'file'    => get_stylesheet_uri(),
				),
			),
			'scripts' => array(
				array(
					'handler'    => 'sunshine-wedding-bootstrap-js',
					'file'       => $jsPath . 'bootstrap.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '5.3.8-4',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'sunshine-wedding-magnific-popup-js',
					'file'       => $jsPath . 'jquery.magnific-popup.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),	
				array(
					'handler'    => 'sunshine-wedding-owl-carousel-js',
					'file'       => $jsPath . 'owl.carousel.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'sunshine-wedding-isotope-pkgd-js',
					'file'       => $jsPath . 'isotope.pkgd.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'scrollIt-js',
					'file'       => $jsPath . 'scrollIt.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'jquery-scrollUp-js',
					'file'       => $jsPath . 'jquery.scrollUp.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'sunshine-wedding-jquery-slicknav-js',
					'file'       => $jsPath . 'jquery.slicknav.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'sunshine-wedding-ajaxchimp-js',
					'file'       => $jsPath . 'jquery.ajaxchimp.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),	
				array(
					'handler'    => 'sunshine-wedding-plugins-js',
					'file'       => $jsPath . 'plugins.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'sunshine-wedding-gijgo-js',
					'file'       => $jsPath . 'gijgo.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'    => 'sunshine-wedding-countdown-js',
					'file'       => $jsPath . 'jquery.countdown.min.js',
					'dependency' => array( 'jquery' ),
					'version'    => '1.0',
					'in_footer'  => true,
				),
				array(
					'handler'		=> 'sunshine-wedding-post-like-js',
					'file' 			=> $jsPath.'post-likes.js',
					'dependency' 	=> array( 'jquery' ),
					'version' 		=> '1.0',
					'in_footer' 	=> true
				),
				array(
					'handler'		=> 'sunshine-ui-js',
					'file' 			=> $jsPath.'colorlib-ui.js',
					'dependency' 	=> array(),
					'version' 		=> '2.1.1',
					'in_footer' 	=> true
				),
				array(
					'handler'    => 'sunshine-wedding-custom-js',
					'file'       => $jsPath . 'main.js',
					'dependency' => array( 'jquery', 'sunshine-ui-js' ),
					'version'    => $this->sunshine_version . '-s1',
					'in_footer'  => true,
				),

			),
		);

		return $scripts;

	} // end enqueu method


	// Google Font
	private function google_font() {
		$font_url = '';

		/*
		 * The families this theme uses are bundled under
		 * assets/fonts/google, so nothing is fetched from Google and
		 * no request leaves the visitor's browser for a third party.
		 *
		 * Translators can still turn the fonts off for scripts these
		 * families do not cover.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'sunshine' ) ) {
			$font_url = get_template_directory_uri() . '/assets/css/google-fonts.css';
		}

		return esc_url_raw( $font_url );
	} //End google_font method

	/**
	 * Epsilon customizer
	 *
	 */

	private function customizer_init(){

	
		

		
		// Instantiate sunshine theme customizer
		$sunshine_theme_customizer = new sunshine_theme_customizer();
	}
	
	/**
	 * Notice for Elementor default style
	 *
	 */

	// Check elementor preview page
	public static function check_elementor_preview_page(){

		if( ( isset( $_REQUEST['action'] ) && 'elementor' == $_REQUEST['action'] ) || isset( $_REQUEST['elementor-preview'] ) ){
			return true;
		}

		return false;

	}
	// Set flag for elementor ( hooked in after switch theme )
	public function set_elementor_flag(){
		update_option( 'sunshine_had_elementor', 'no' );
	}
	// Elementor dsiable default style
	public function elementor_desiable_default_style(){

		$nonce = $_POST['nonce'];
		if ( ! wp_verify_nonce( $nonce, 'sunshine-elementor-notice-nonce' ) ) {
			return;
		}
		$reply = $_POST['reply'];
		if ( ! empty( $reply ) ) {
			if ( $reply == 'yes' ) {
				update_option( 'elementor_disable_color_schemes', 'yes' );
				update_option( 'elementor_disable_typography_schemes', 'yes' );
			}
			update_option( 'sunshine_had_elementor', 'yes' );
		}
		die();

	}
	// Enqueue theme default style for elementor
	public function enqueue_elementor_theme_default_style(){

		$disabled_color_schemes      = get_option( 'elementor_disable_color_schemes' );
		$disabled_typography_schemes = get_option( 'elementor_disable_typography_schemes' );

		if ( $disabled_color_schemes === 'yes' && $disabled_typography_schemes === 'yes' ) {
			wp_enqueue_style( 'sunshine-elementor-default-style',  SUNSHINE_DIR_CSS_URI. 'elementor-default-element-style.css', array(), $this->sunshine_version );
		}
	}
	// Enqueue elementor notice scripts
	public function enqueue_elementor_notice_script(){

		$had_elementor = get_option( 'sunshine_had_elementor' );

		if( $had_elementor == 'no' && self::check_elementor_preview_page() ){
			wp_enqueue_script( 'sunshine-elementor-notice', SUNSHINE_DIR_JS_URI.'sunshine-elementor-notice.js', array('jquery'), '1.0', true );
			wp_localize_script(
				'sunshine-elementor-notice',
				'sunshineElementorNotice',
				array(
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
					'nonce'   => wp_create_nonce( 'sunshine-elementor-notice-nonce' ),
				)
			);
		}

	}


} // End Sunshine Class


?>