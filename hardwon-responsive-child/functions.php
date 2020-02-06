<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'hardwon_enqueue_scripts' );
function hardwon_enqueue_scripts() {
	//header scripts
	wp_enqueue_script( 'd3', 'https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.0/d3.js' );
	wp_enqueue_script( '_', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js' );
	wp_enqueue_script( 'd3-simple-slider', get_stylesheet_directory_uri() . '/lib/d3-simple-slider.min.js' );
	wp_enqueue_script( 'd3-array', 'https://d3js.org/d3-array.v2.min.js' );
	wp_enqueue_script( 'topojson', 'https://unpkg.com/topojson@3' );
	//footer scripts
	wp_register_script( 'timeslider', get_stylesheet_directory_uri() . '/lib/timeslider.js', '', '1.0', true);
	wp_enqueue_script( 'timeslider');
	
}
?>
