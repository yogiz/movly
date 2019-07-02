<?php 

/*
  Template Name: Blank - No Container | Header, No Footer
*/

get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main>
    <?php 
      if( have_posts() ) :
        while(have_posts()) : the_post();
          the_content();
        endwhile;
      else : 
      ?>
      <p><?php __('No Pages Found') ?></p>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>