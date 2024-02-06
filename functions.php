<?php 

if ( ! function_exists( 'sandbox_setup') ) {

    function sandbox_setup() {

        load_theme_textdomain( 'Sandbox', get_template_directory() . '/languages' );

    }

}

add_action( 'after_setup_theme', 'sandbox_setup' );

?>