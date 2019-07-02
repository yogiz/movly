<?php 

/*
  Template Name: Parallax - No Container | No Header, Footer
*/

get_header(); ?>

  <div class="parallax-container valign-wrapper">
    <div class="parallax">
      <?php if( has_post_thumbnail() ) {
          the_post_thumbnail('full', array( 'class' => 'page-parallax-thumbnail' ));
          $heading_color = 'white-text';
        } else {
          $heading_color = '';
        }
         ?>
    </div>
    <h1 class="container <?php echo $heading_color ?>"><?php the_title(); ?></h1>
  </div>
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

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>