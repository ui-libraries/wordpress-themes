<?php
function my_mime_types($mime_types){
    $mime_types['zip'] = 'application/zip';
    return $mime_types;
}
add_filter('upload_mimes', 'my_mime_types', 1, 1);
?>

<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>
