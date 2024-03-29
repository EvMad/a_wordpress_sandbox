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
            'footer' => esc_html__( 'Footer Menu', 'sandbox ' ),
        ) );
    }

}

add_action( 'after_setup_theme', 'sandbox_setup' );


// @global int

function sandbox_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'sandbox_content_width', 1170 );
}

add_action( 'after_setup_theme', 'sandbox_content_width', 0);

// @since 

function sandbox_sidebar_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Sidebar', 'sandbox' ),
        'id' => 'default-sidebar',
        'description' => esc_html__( 'Add widgets here.', 'sandbox' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
}

add_action( 'widgits_init', 'sandbox_sidebar_widget_init' );

function sandbox_public_scripts() {

    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], wp_rand(), 'all' );

    wp_enqueue_scripts( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], wp_rand(), true );

}
add_action( 'wp_enqueue_scripts', 'sandbox_public_scripts' );

function sandbox_admin_scripts() {

}
add_action( 'wp_enqueue_scripts', 'sandbox_admin_scripts' );

?>