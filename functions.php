<?php 

if ( ! function_exists( 'sandbox_setup') ) {

    function sandbox_setup() {

        load_theme_textdomain( 'Sandbox', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-background', apply_filters( 'sandbox_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'custom-logo', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]
           
        );

        add_theme_support( 'custom-header', [
            'flex-width' => true,
            'width' => 1600,
            'flex-height' => true,
            'height' => 450,
            'default-image' => '',
        ]
        );

        add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'sandbox' ),
        ) );
    }

}

add_action( 'after_setup_theme', 'sandbox_setup' );


@global int

function sandbox_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'sandbox_content_width', 1170 );
}

add_action( 'after_setup_theme', 'sandbox_content_width', 0);

?>