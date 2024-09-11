<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/uids/css/fonts.css' );
    wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/uids/css/reset.css' );
    wp_enqueue_style( 'iowa-bar', get_stylesheet_directory_uri() . '/uids/css/components/iowa-bar.css' );
    wp_enqueue_style( 'footer', get_stylesheet_directory_uri() . '/uids/css/components/footer.css' );

}


/*
*/
?>



