<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
  <?php if(is_single() || is_page()): ?>
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
  <?php endif; ?>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>