<div class="post-author card">
  <div class="card-content grey lighten-4 grey-text">
    <p><i class="material-icons left">create</i>About the Author</p>
  </div>
  <div class="card-content grey lighten-5">
    <div class="post-author__meta--container row">
      <div class="col s12 m4 l3 center-align">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
      </div>
      <div class="col s12 m8 l9">
        <h4 class="h5"><?php echo get_the_author_meta( 'display_name' ); ?></h4>
        <p class="grey-text text-darken-2"><?php echo get_the_author_meta( 'description' ); ?></p>
      </div>
    </div>
  </div>
  <div class="card-action grey lighten-4">
    <?php if( get_the_author_meta( 'url' ) ): ?>
      <a href="<?php echo get_the_author_meta( 'url' ); ?>" class="waves-effect btn-flat red-text text-darken-1" target="_blank" rel="noopener"><i class="material-icons left">public</i> Visit <?php echo get_the_author_meta( 'first_name' ); ?>'s website</a>
    <?php endif; ?>
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="waves-effect btn-flat red-text text-darken-1"><i class="material-icons left">view_list</i>View posts</a>
  </div>
</div>