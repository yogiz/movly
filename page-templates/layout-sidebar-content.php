<?php 

/*
  Template Name: Layout - Left Sidebar, Right Content
*/

get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <div class="row">

      <?php if(is_active_sidebar('sidebar')): ?>
        <div class="col s12 m12 l3">
          <?php dynamic_sidebar('sidebar'); ?>
        </div>
      <?php endif; ?>

      <div class="col s12 m12 l8 offset-l1">
        <div class="card-panel">
          <h1><?php the_title(); ?></h1>
            <?php 
            if( have_posts() ) :
              while(have_posts()) : the_post();
                the_content();
              endwhile;
            else : 
            ?>
            <p><?php __('No Pages Found') ?></p>
          <?php endif; ?>
        </div>
      </div>
      
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>