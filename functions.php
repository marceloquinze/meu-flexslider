<?php 
/**
 * Enqueue scripts and styles.
 */
function parea_load_scripts(){
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/flexslider/flexslider.css', array(), null, 'all');
	wp_enqueue_script( 'flexsliderjqmin', get_template_directory_uri(). '/flexslider/jquery.flexslider-min.js', array('jquery'), null, false);  
	wp_enqueue_script( 'flexslider', get_template_directory_uri(). '/flexslider/flexslider.js', array('jquery'), null, false); 
}
add_action( 'wp_enqueue_scripts', 'parea_load_scripts' );
