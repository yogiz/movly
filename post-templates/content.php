<?php if( is_single() || is_page() ): ?>

  <div class="blog-post">
    <?php 
      the_content();
      /* Display author section. */
      get_template_part('inc/partials/partial', 'post-author');
      /* Display comments */
      the_tags( '<ul class="post-tag"><li>Tags :</li><li>', '</li><li>', '</li></ul>' );
      if( comments_open() ) { 
        comments_template();
      } else { 
        echo '<p>Comments are closed for this post.</p>';
        }
    ?>
  </div>

<?php else : ?>

  <div class="grid-post blog-post col l4 m4 s6">

      <div class="card">
        <div class="card-image">
          <a href="<?php the_permalink(); ?>" class="waves-effect">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', array('class' => 'responsive-img') ); ?>
            <?php else: ?>
              <img width="300" height="200" src="https://via.placeholder.com/300x200" class="responsive-img wp-post-image" alt="betube thumb">
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="btn-floating play-fab waves-effect waves-light green"><i class="material-icons">play_arrow</i></a>
          </a>
        </div>
      
      </div>
          <?php 
            show_count();
          ?>
      <div class="">
        <a href="<?php the_permalink(); ?>">
          <h2 class=" blog-post-title"><?php the_title(); ?></h2>
        </a>
      </div>

  </div>
  
<?php endif; ?>




