<?php 

/*
  Template Name: Blank - Container | Header, Footer
*/

get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
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

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>