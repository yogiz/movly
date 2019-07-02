<?php

// Widget locations
function movly_widgets($id){

  register_sidebar(array(
    'name'          =>  'Main Sidebar',
    'description'   =>  'Add widgets here to appear in your sidebar on blog posts and pages.',
    'id'            =>  'sidebar',
    'before_widget' =>  '<aside id="%1$s" class="sidebar-widget %2$s">',
    'after_widget'  =>  '</aside>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Header 1',
    'description'   =>  'Add widgets here to appear in your header.',
    'id'            =>  'header-one',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Header 2',
    'description'   =>  'Add widgets here to appear in your header.',
    'id'            =>  'header-two',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Header 3',
    'description'   =>  'Add widgets here to appear in your header.',
    'id'            =>  'header-three',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Header 4',
    'description'   =>  'Add widgets here to appear in your header.',
    'id'            =>  'header-four',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Footer 1',
    'description'   =>  'Add widgets here to appear in your footer.',
    'id'            =>  'footer-one',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Footer 2',
    'description'   =>  'Add widgets here to appear in your footer.',
    'id'            =>  'footer-two',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Footer 3',
    'description'   =>  'Add widgets here to appear in your footer.',
    'id'            =>  'footer-three',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));

  register_sidebar(array(
    'name'          =>  'Footer 4',
    'description'   =>  'Add widgets here to appear in your footer.',
    'id'            =>  'footer-four',
    'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="h4">',
    'after_title'   =>  '</h3>'
  ));
}

add_action('widgets_init','movly_widgets');

?>