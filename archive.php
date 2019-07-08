<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <div class="row">
      <div class="col s12 m12 l9">
        <?php 
          
          if( have_posts() ) : 
          
          the_archive_title('<h1 class="page-title">', '</h1>');
          the_archive_description('<span class="post-excerpt">', '</span>');
          
            while(have_posts()) : the_post();
              get_template_part('post-templates/content', 'archive');
            endwhile;

            movly_pagination();
          else : 
        ?>
          <p><?php __('No Posts Found') ?></p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>