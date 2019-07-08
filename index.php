<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <div class="row">
      <div class="col s12 m12 l9">

            <?php 
            get_search_form();

            if( have_posts() ) : ?>
              <!-- <h1><?php single_post_title(); ?></h1> -->
              <div class="row">
              <?php 
                while(have_posts()) : the_post();
                  get_template_part('post-templates/content', get_post_format());
                endwhile;
                ?>

              </div>
              <?php 
                 movly_pagination();
              ?>
              <?php else : ?>
              <p><?php __('No Posts Found') ?></p>
            <?php endif; ?>

      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>