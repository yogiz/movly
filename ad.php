<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <h1><?php the_title(); ?></h1>
    <?php 
      while(have_posts()) : the_post();
        the_content();
      endwhile;
    ?>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>