<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function all_business_enqueue_styles() {
    $parent_style = 'theme-style';
	
	
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}

add_action('wp_enqueue_scripts', 'all_business_enqueue_styles');

function de_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sector Sidebar',
		'id'            => 'sector_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sector-side-heading">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'de_widgets_init' );
?>