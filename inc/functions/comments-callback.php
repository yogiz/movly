<?php

// Custom callback function to display list of comments and their replies
// using material design. This function is called by wp_list_comments()
// in comments.php.

function mwp_comments_callback( $comment, $args, $depth ) {
	
	// checks if were using a div or ol|ul for our output
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

	// checks if it's a comment or reply
	if( '0' != $comment->comment_parent ){
		// this is a reply
		$c_check_img = 'col s12 m2 l2 offset-m2 offset-l2';
		$c_check_card = 'col s12 m8 l8';
		$c_check_parent = '';
	} else {
		// this is a comment
		$c_check_img = 'col s12 m2 l2';
		$c_check_card = 'col s12 m10 l10';
		$c_check_parent = 'row';
	}

	?>

	<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $c_check_parent, $comment ); ?>>		

		<div class="<?php echo $c_check_img ?>">
			<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		</div>

		<div class="<?php echo $c_check_card ?>">

			<div id="div-comment-<?php comment_ID(); ?>" class="card">
				<div class="card-content grey lighten-4">

					<?php printf( __( '%s <span class="says">says:</span>' ), sprintf( '<b>%s</b>', get_comment_author_link( $comment ) ) ); ?>

					<br>

					<a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>" class="grey-text text-darken-1">
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php
										/* translators: 1: comment date, 2: comment time */
										printf( __( 'On %1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
								?>
							</time>
					</a>
					<?php edit_comment_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

					<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
					<?php endif; ?>
				</div><!-- .comment-meta -->

				<div class="card-content grey lighten-5">
						<?php comment_text(); ?>
				</div><!-- .comment-content -->

				<?php
				comment_reply_link( array_merge( $args, array(
						'add_below' => 'div-comment',
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
						'before'    => '<div class="card-action grey lighten-4">',
						'after'     => '</div>'
				) ) );
				?>
			</div><!-- .comment-body -->

		</div>

<?php
}