<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <div class="row">

      <h1><?php the_title(); ?></h1>
      <?php

        // Show post excerpt, if available.
        if ( has_excerpt() ) {
          ?><span class="h5 grey-text text-darken-1"><?php the_excerpt(); ?></span><?php
        }

        // Show post thumbnail, if available.
        if( has_post_thumbnail() ) {
          the_post_thumbnail('large', array( 'class' => 'post-thumbnail' ));
        }
      ?>

      <div class="post-meta col s12 m12 l2 grey-text text-darken-1">
        <div class="post-meta__author-img">
          <?php 
          global $post;
          $author_id = $post->post_author;
          echo get_avatar( $author_id, 90 ); ?>
        </div>
        <div class="post-meta__author-name-date">
          <p>
            Written by <b><?php
            the_author_meta( 'display_name', $author_id );
            ?></b>
          </p>
          <p>Published <?php the_time('F j, Y'); ?></p>
        </div>
      </div>
      
      <div class="col s12 m12 l8">
        <?php
          if(have_posts()) :
            while(have_posts()) : the_post();
              get_template_part('post-templates/content', get_post_format());
            endwhile;
          else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>