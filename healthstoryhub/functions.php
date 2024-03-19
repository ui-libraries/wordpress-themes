<?php
/* Functions for Twenty Twenty Child - Health Story Hub */



add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Registers health stories and instruction materials to display in native tag and category archive pages
 function healthstoryhub_show_pod_archives ( $query ) {
	 if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		 $query->set( 'post_type', array(
		 'post', 'nav_menu_item', 'submissions'
		 ));
		 return $query;
	}
}
add_filter( 'pre_get_posts', 'healthstoryhub_show_pod_archives' );

// Search body of post 
add_filter( 'relevanssi_excerpt_specific_custom_field_content', function( $fields ) {
    $fields['exclude_this_field'] = '';
    $fields['modify_this_field']  = str_replace( 'unwanted text', 'better text', $fields['modify_this_field'] );
    return $fields;
  } );
 
  
?>

