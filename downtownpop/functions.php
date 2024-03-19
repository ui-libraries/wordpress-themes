<?php

/**
 * City of Lit functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage City of Lit
 */
 
 add_theme_support( 'post-thumbnails' );
 
 /* pods template shortcodes */
 function person_search_shortcode( $attr ) {
    ob_start();
    get_template_part( 'template-parts/person-search' );
    return ob_get_clean();
}
add_shortcode( 'person_search', 'person_search_shortcode' );

 function story_search_shortcode( $attr ) {
    ob_start();
    get_template_part( 'template-parts/story-search' );
    return ob_get_clean();
}
add_shortcode( 'story_search', 'story_search_shortcode' );

 function story_place_shortcode( $attr ) {
    ob_start();
    get_template_part( 'template-parts/place-search' );
    return ob_get_clean();
}
add_shortcode( 'place_search', 'story_place_shortcode' );


 function orphan_person_shortcode( $attr ) {
    echo "<h2>Orphaned person records</h2>";
	$params = array('limit'=>-1);
	$people = pods('person', $params);
	//var_dump($people);
	while ( $people->fetch() ) {
		$people->id = $people->id(); 
		$name = $people->field('id');
		$par = array('where'=> "related_person.id = '$name'", 'limit' => -1);
		$stories = pods('story', $par);
		if ($stories->total() === 0) {
			echo $people->template('person stub');
		}
		
	} 
}
add_shortcode( 'orphan_person', 'orphan_person_shortcode' );

 function orphan_place_shortcode( $attr ) {
    echo "<h2>Orphaned place records</h2>";
	$params = array('limit'=>-1);
	$places = pods('place', $params);
	while ( $places->fetch() ) {
		$places->id = $places->id(); 
		$name = $places->field('id');
		$par = array('where'=> "place_relation.id = '$name'", 'limit' => -1);
		$stories = pods('story', $par);
		if ($stories->total() === 0) {
			echo "<h3><a href='".home_url('/')."place/".$places->display('slug')."'>".$places->display('title')."</a></h3>";
		}
		
	} 
}
add_shortcode( 'orphan_place', 'orphan_place_shortcode' );




/* tour routing */

add_action( 'init', 'wptour_rewrites_init' );
function wptour_rewrites_init(){
    add_rewrite_rule(
        '^tour/(.+)/(.+)/?',
		'index.php?pagename=tour&tourtype=$matches[1]&tourquery=$matches[2]',
        'top' );
}

add_filter( 'query_vars', 'wptour_query_vars' );
function wptour_query_vars( $query_vars ){
    $query_vars[] = 'tourtype';
    $query_vars[] = 'tourquery';
    return $query_vars;
}

/* place_type routing */

add_action( 'init', 'placetype_rewrites_init' );
function placetype_rewrites_init(){
    add_rewrite_rule(
        '^places/(.+)/?',
		'index.php?pagename=places&placetype=$matches[1]',
        'top' );
}

add_filter( 'query_vars', 'placetype_query_vars' );
function placetype_query_vars( $query_vars ){
    $query_vars[] = 'placetype';
    return $query_vars;
}

/* person taxonomy routing */

add_action( 'init', 'person_rewrites_init' );
function person_rewrites_init(){
    add_rewrite_rule(
        '^people/(.+)/(.+)/?',
		'index.php?pagename=people&taxonomy=$matches[1]&taxvalue=$matches[2]',
        'top' );
}

add_filter( 'query_vars', 'person_query_vars' );
function person_query_vars( $query_vars ){
    $query_vars[] = 'taxonomy';
	$query_vars[] = 'taxvalue';
    return $query_vars;
}

/* Register menus and widget areas */

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function downtownpop_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Left',
		'id'            => 'footer_left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer Right',
		'id'            => 'footer_right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer Bottom',
		'id'            => 'footer_bottom',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'downtownpop_widgets_init' );
?>