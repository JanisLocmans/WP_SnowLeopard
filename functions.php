<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'javascript', get_template_directory_uri() . '/inc/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'javascript2', get_template_directory_uri() . '/inc/js/scroll.js', array(), '1.1.0', false );
}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));
function get_excerpt($count, $_boolval = true){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  if ($_boolval == true ) { 
  	$excerpt = $excerpt.'<h1><a href="'.$permalink.'">Read More</a><h1>';
  	return $excerpt;
  }else{return $excerpt;}
}
function retrieve_cat(){	
	$categories = get_the_category();
	$separator = ", ";
	$output = '';
	if ($categories) {
	foreach ($categories as $category) {
	$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
		}
		echo trim($output, $separator);
	}													
}
function snow_meta(){
	echo 'Date : '.
	 get_the_date('F j, Y'). 
	 ' / Author : <a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author().'</a> 
	   / Category : '; retrieve_cat();
}

/*
<?php 
					$pages = array("sample-page", "Purr");
					foreach ( $pages as  $value )
					{
					//$query = new WP_Query( 'pagename=' . $value);
					// The Loop
					if ( have_posts() ) {
					while ( have_posts() ) {
					the_post();?>
										<?php
							}
						} 
					}
					wp_reset_postdata();											
					?>		
*/
/*if( ! function_exists('funct123') ) {
	function funct123() {
		echo 'arf';
	}
	add_action('wp_head', 'funct123', 5);
}*/


/*add_action( 'after_setup_theme', 'dbstuff' );





 /***************************************
 ****One-Page-Init
 ***************************************/
function set_one_page_option() {
	add_option('snow_one_page_option', '');
} 
add_action( 'after_setup_theme', 'set_one_page_option' );

	function one_pag_init() {
	    add_menu_page('One Page Settings', 'One Page Settings', 'manage_options', 'snow-one-page', 'get_one_page');
	}
	function get_one_page() {
		get_template_part( 'parts/one-page-form');
	}
add_action('admin_menu', 'one_pag_init');
 /***************************************
 ****One-Page-Init END
 ***************************************/


 /*https://www.possible.com/ OMG */
 