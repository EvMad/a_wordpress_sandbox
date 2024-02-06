<?php 

if ( ! function_exists( 'sandbox_setup') ) {

    function sandbox_setup() {

        load_theme_textdomain( 'Sandbox', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'thumbnails' );

    }

}

add_action( 'after_setup_theme', 'sandbox_setup' );

?>