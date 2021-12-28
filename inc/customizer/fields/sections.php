<?php 
/**
 * @Packge     : Sunshine
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'sunshine_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'sunshine' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(
    
    /**
     * Header Section
     */
    array(
        'id'   => 'sunshine_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'sunshine' ),
            'panel'    => 'sunshine_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'sunshine_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'sunshine' ),
            'panel'    => 'sunshine_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'sunshine_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'sunshine' ),
            'panel'    => 'sunshine_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'sunshine_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'sunshine' ),
            'panel'    => 'sunshine_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'sunshine_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'sunshine' ),
            'panel'    => 'sunshine_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'sunshine_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'sunshine' ),
            'panel'    => 'sunshine_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>