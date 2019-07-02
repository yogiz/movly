<?php if( is_single() || is_page() ): ?>

  <div class="blog-post">

    <?php 
    
      the_content();

      /* Display author section. */
      get_template_part('inc/partials/partial', 'post-author');

      /* Display comments */

      if( comments_open() ) { 
        comments_template();
      } else { 
        echo '<p>Comments are closed for this post.</p>';
        }

    ?>

  </div>

<?php else : ?>

  <div class="blog-post">
    <a href="<?php the_permalink(); ?>">

      <div class="card hoverable">

        <div>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large', array('class' => 'responsive-img') ); ?>
          <?php endif; ?>
        </div>

        <div class="card-content">
          <h2 class="h4 blog-post-title"><?php the_title(); ?></h2>
          <p class="blog-post-meta grey-text text-darken-1">Written by <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>
          <br>
          <?php the_excerpt(); ?>
        </div>

      </div>
    </a>
  </div>
<?php endif; ?>