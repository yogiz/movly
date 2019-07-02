<?php if(is_single() || is_page()): ?>

<div class="blog-post">
  
  <?php the_content();

  /* Display author section. */
  if( is_single() ) {
    get_template_part('inc/partials/partial', 'post-author');
  }

  /* Display comments */
  if( is_single() ):
    if( comments_open() ) { 
      comments_template();
    } else { 
      echo '<p>Comments are closed for this post.</p>';
      }
  endif;
  ?>
</div>

<?php else : ?>

<div class="blog-post">
	<div class="card hoverable">
    <a href="<?php the_permalink(); ?>">
      <div class="post-thumb card-image">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium_large', array( 'class' => 'post-thumb responsive-img' )); ?>
        <?php endif; ?>
      </div>
      <div class="card-content">
        <h2 class="h4 grey-text text-darken-4"><?php the_title(); ?></h2>
        <p class="blog-post-meta grey-text text-darken-1">Written by <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>
        </a>
        <br>
        <!-- Get the audio file. -->
        <?php
          $content = apply_filters( 'the_content', get_the_content() );
          $audio   = false;

          // Only get audio from the content if a playlist isn't present.
          if ( false === strpos( $content, 'wp-playlist-script' ) ) {
            $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
          }
          // Display the audio.
          if ( ! empty( $audio ) ) {
            foreach ( $audio as $audio_html ) {
              echo '<div class="entry-audio">';
                echo $audio_html;
              echo '</div><!-- .entry-audio -->';
            }
          };
        ?>
        <?php
          global $post;
          if ( has_excerpt( $post->ID ) ) {
            ?><br><?php
              the_excerpt();
          } else {
              // This post has no excerpt
          }
        ?>
      </div>
	</div>
</div>

<?php endif; ?>