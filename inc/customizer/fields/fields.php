<?php 
/**
 * @Packge     : Sunshine
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
// Epsilon_Customizer::add_field(
//     'sunshine_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'sunshine' ),
//         'description' => esc_html__( 'Select the theme color.', 'sunshine' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'sunshine_general_section',
//         'default'     => '#131313',
//     )
// );

// Header color sections
Colorlib_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Color Section', 'sunshine' ),
        'section'     => 'sunshine_header_section',

    )
);
 
// Header background color field
Colorlib_Customizer::add_field(
    'sunshine_header_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'sunshine' ),
        'description' => esc_html__( 'Select the header background color.', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Colorlib_Customizer::add_field(
    'sunshine_header_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Colorlib_Customizer::add_field(
    'sunshine_header_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Colorlib_Customizer::add_field(
    'sunshine_dropdown_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Colorlib_Customizer::add_field(
    'sunshine_dropdown_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_header_section',
        'default'     => '#808080',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Colorlib_Customizer::add_field(
    'sunshine_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'sunshine' ),
        'description' => esc_html__( 'Set post excerpt length.', 'sunshine' ),
        'section'     => 'sunshine_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Colorlib_Customizer::add_field(
    'sunshine_blog_meta',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'sunshine' ),
        'section'     => 'sunshine_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'sunshine_like_btn',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'sunshine' ),
        'section'     => 'sunshine_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'sunshine_blog_share',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'sunshine' ),
        'section'     => 'sunshine_blog_section',
        'default'     => true
    )
);


/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Colorlib_Customizer::add_field(
    'sunshine_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'sunshine' ),
        'section'           => 'sunshine_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Colorlib_Customizer::add_field(
    'sunshine_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'sunshine' ),
        'section'           => 'sunshine_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Colorlib_Customizer::add_field(
    'sunshine_fof_textone_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Colorlib_Customizer::add_field(
    'sunshine_fof_texttwo_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Colorlib_Customizer::add_field(
    'sunshine_fof_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Colorlib_Customizer::add_field(
    'sunshine_footer_copyright_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'sunshine' ),
        'section'     => 'sunshine_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'sunshine' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Colorlib_Customizer::add_field(
    'sunshine_footer_copyright_text',
    array(
        'type'        => 'colorlib-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'sunshine' ),
        'section'     => 'sunshine_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Colorlib_Customizer::add_field(
    'sunshine_footer_widget_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_footer_section',
        'default'     => '#fffaf2',
    )
);

// Footer widget text color field
Colorlib_Customizer::add_field(
    'sunshine_footer_widget_text_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_footer_section',
        'default'     => '#919191',
    )
);

// Footer widget anchor color field
Colorlib_Customizer::add_field(
    'sunshine_footer_widget_anchor_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_footer_section',
        'default'     => '#1f1f1f',
    )
);

// Footer widget anchor hover color field
Colorlib_Customizer::add_field(
    'sunshine_footer_widget_anchor_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'sunshine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sunshine_footer_section',
        'default'     => '#c78665',
    )
);

