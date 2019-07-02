<?php

// Theme Support

function movly_setup(){
	add_theme_support('menus');
	register_nav_menu('primary', "Primary Header Navigation");
	register_nav_menu('secondary', "Footer Navigation");
	register_nav_menu('social', "Social Links");
}
add_action('init','movly_setup');

add_theme_support('custom-background');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array(
	'aside',
	'gallery',
	'link',
	'image',
	'quote',
	'video',
	'audio'
));

add_theme_support('html5', array(
	'comment-list',
	'comment-form',
	'search-form'
));

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// Let WordPress handle the <title> tag.
add_theme_support( 'title-tag' );

// Excerpt length control
function set_excerpt_length(){
	return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');

// Head function, remove wp version
function movly_remove_version() {
	return '';
}
add_filter('the_generator','movly_remove_version');

// Add class 'responsive-img' to all post images
function add_image_class($class){
  $class .= ' responsive-img';
  return $class;
}
add_filter('get_image_tag_class','add_image_class');

// Add class 'video-container' to all post iframe videos
function iframe_video( $html ) {
	$html = str_replace('<iframe', '<div class="video-container"><iframe', $html);
	$html = str_replace('</iframe>', '</iframe></div>', $html);
	return $html;
}
add_filter('embed_oembed_html', 'iframe_video', 99, 4);
?>