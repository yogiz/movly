<?php
/*
 * movly functions and definitions
 */

// Enqueue Scripts and Stylesheets
function movly_scripts() {
	wp_enqueue_style( 'material_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', '1.0.0', 'all' );
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto', '1.0.0', 'all' );
	wp_enqueue_style( 'style', get_theme_file_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'materialize', get_theme_file_uri() . '/assets/js/materialize.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'movly_scripts' );

// Includes
require get_template_directory() . '/inc/functions/theme-support.php';
require get_template_directory() . '/inc/functions/admin.php';
require get_template_directory() . '/inc/functions/walker.php';
require get_template_directory() . '/inc/functions/widgets.php';
require get_template_directory() . '/inc/functions/pagination.php';
require get_template_directory() . '/inc/functions/comments-callback.php';

?>