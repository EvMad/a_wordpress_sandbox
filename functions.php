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

    }

}

add_action( 'after_setup_theme', 'sandbox_setup' );

?>