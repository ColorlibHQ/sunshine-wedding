<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'sunshine_preloader', 'sunshine_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'sunshine_header', 'sunshine_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'sunshine_footer', 'sunshine_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'sunshine_wrp_start', 'sunshine_wrp_start_cb', 10 );
	add_action( 'sunshine_wrp_end', 'sunshine_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'sunshine_blog_col_start', 'sunshine_blog_col_start_cb', 10 );
	add_action( 'sunshine_blog_col_end', 'sunshine_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'sunshine_blog_posts_thumb', 'sunshine_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'sunshine_blog_details_wrap_start', 'sunshine_blog_details_wrap_start_cb', 10 );
	add_action( 'sunshine_blog_details_wrap_end', 'sunshine_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'sunshine_blog_posts_title', 'sunshine_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'sunshine_blog_posts_meta', 'sunshine_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'sunshine_blog_posts_excerpt', 'sunshine_blog_posts_excerpt_cb', 10 );
	// add_action( 'sunshine_blog_posts_excerpt', 'sunshine_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'sunshine_blog_posts_info_link', 'sunshine_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'sunshine_blog_posts_content', 'sunshine_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'sunshine_blog_posts_share', 'sunshine_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'sunshine_blog_sidebar', 'sunshine_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'sunshine_blog_single_meta', 'sunshine_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'sunshine_page_content', 'sunshine_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'sunshine_fof', 'sunshine_fof_cb', 10 );

	

?>