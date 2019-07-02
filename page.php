<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <div class="row">
      <div class="col s12 m12 l8">
        <h1><?php the_title(); ?></h1>
        <?php 
        if(have_posts()) :
          while(have_posts()) : the_post();
            the_content();
          endwhile;
        else : ?>
          <p><?php __('No Pages Found') ?></p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>