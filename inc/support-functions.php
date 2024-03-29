<?php
/**
 * @Packge     : Sunshine
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author     URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


// Post Category
function sunshine_post_cats() {

	$cats       = get_the_category();
	$categories = '';
	if ( $cats ) {

		$categories .= '<div class="posts--cat m--30-0-0">';
		$categories .= '<ul class="nav"><li><span><i class="fa fm fa-th-list"></i>' . esc_html( 'Catagory :', 'sunshine' ) . '</span></li>';

		foreach ( $cats as $cat ) {
			$categories .= '<li><a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="category-link">' . esc_html( $cat->name ) . '</a></li>';
		}

		$categories .= '</ul>';
		$categories .= '</div>';
	}

	return $categories;

}

// Blog categories
function sunshine_featured_post_cat(){

	$categories = get_the_category(); 
	
	if( is_array( $categories ) && count( $categories ) > 0 ){
		$getCat = [];
		foreach ( $categories as $value ) {

			if( $value->slug != 'featured' && ! is_front_page() ){
				$getCat[] = '<a href="'.esc_url( get_category_link( $value->term_id ) ).'"> <i class="ti-bookmark"></i> '.esc_html( $value->name ).'</a>';
			}else{
				$getCat[] = '<i class="ti-bookmark"></i>'.esc_html( $value->name );
			}
		}

		return implode( ', ', $getCat );
	}
         
}


// Post Tags
function sunshine_post_tags() {

	$tags = get_the_tags();

	$getTags = '';

	if ( $tags ) {

		foreach ( $tags as $tag ) {
			$getTags .= '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="tag-item">' . esc_html( $tag->name ) . '</a>';
		}

	}

	return $getTags;

}


// social media
if ( ! function_exists( 'sunshine_social' ) ) {
	function sunshine_social( $args = array() ) {

		$default = array(
			'wrapper_start' => '',
			'wrapper_end'   => '',
			'class'         => 'topbar-social',
		);

		$args = wp_parse_args( $args, $default );


		$url = sunshine_opt( 'sunshine_social_url' );
		if ( is_array( $url ) && count( $url ) > 0 ):

			echo wp_kses_post( $args['wrapper_start'] );

			echo '<div class="' . esc_attr( $args['class'] ) . '">';

			// Facebook
			if ( ! empty( $url['facebook_url'] ) ) {
				echo '<a href="' . esc_url( $url['facebook_url'] ) . '" class="topbar-social-item fa fa-facebook"></a>';
			}
			// Twitter
			if ( ! empty( $url['twitter_url'] ) ) {
				echo '<a href="' . esc_url( $url['twitter_url'] ) . '" class="topbar-social-item fa fa-twitter"></a>';
			}
			// Google
			if ( ! empty( $url['google_url'] ) ) {
				echo '<a href="' . esc_url( $url['google_url'] ) . '" class="topbar-social-item fa fa-google-plus"></a>';
			}
			// Instagram
			if ( ! empty( $url['instagram_url'] ) ) {
				echo '<a href="' . esc_url( $url['instagram_url'] ) . '" class="topbar-social-item fa fa-instagram"></a>';
			}
			// Pinterest
			if ( ! empty( $url['pinterest_url'] ) ) {
				echo '<a href="' . esc_url( $url['pinterest_url'] ) . '" class="topbar-social-item fa fa-pinterest-p"></a>';
			}
			// Snapchat
			if ( ! empty( $url['snapchat_url'] ) ) {
				echo '<a href="' . esc_url( $url['snapchat_url'] ) . '" class="topbar-social-item fa fa-snapchat-ghost"></a>';
			}
			// Youtube
			if ( ! empty( $url['youtube_url'] ) ) {
				echo '<a href="' . esc_url( $url['youtube_url'] ) . '" class="topbar-social-item fa fa-youtube-play"></a>';
			}


			echo '</div>';
			echo wp_kses_post( $args['wrapper_end'] );

		endif;
	}
}
// header cart count
function sunshine_cart_count( $class = '' ) {

	?>
	<div class="header-wrapicon2 <?php echo esc_attr( $class ); ?>">
		<img src="<?php echo esc_url( SUNSHINE_DIR_ASSETS_URI ); ?>img/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="<?php esc_attr_e( 'ICON', 'sunshine' ); ?>">
		<span class="header-icons-noti"><?php echo sprintf( '%d', WC()->cart->cart_contents_count ); ?></span>
		<div class="header-cart header-dropdown">
			<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
		</div>
	</div>
	<?php
}


// Set contact form 7 default form template
function sunshine_contact7_form_content( $template, $prop ) {
    
    if ( 'form' == $prop ) {

        $template =
            '<div class="row"><div class="col-12"><div class="form-group">[textarea* your-message id:message class:form-control class:w-100 rows:9 cols:30 placeholder "Message"]</div></div><div class="col-sm-6"><div class="form-group">[text* your-name id:name class:form-control placeholder "Enter your  name"]</div></div><div class="col-sm-6"><div class="form-group">[email* your-email id:email class:form-control placeholder "Enter your email"]</div></div><div class="col-12"><div class="form-group">[text your-subject id:subject class:form-control placeholder "Subject"]</div></div></div><div class="form-group mt-3">[submit class:button class:button-contactForm class:btn_1 class:boxed-btn "Send"]</div>';

        return $template;

    } else {
    return $template;
    } 
}
add_filter( 'wpcf7_default_template', 'sunshine_contact7_form_content', 10, 2 );