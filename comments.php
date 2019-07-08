<?php

// If the current post is protected by a password and the visitor has not
// yet entered the password, we will return early without loading the
// comments.

if ( post_password_required() )
  return;

?>

<div class="comments">

  <!-- Display Comment -->

  <?php if ( have_comments() ) : ?>
    <h3 class="h4"><?php comments_number('Leave a comment', '1 Comment', '% Comments'); ?></h3>
  <?php endif; ?>


    <?php

    $args = array(
      'style'             =>  'div',
      'avatar_size'       =>  50,
      'format'            =>  'html5',
      'callback'          =>  'mwp_comments_callback'
      );

    wp_list_comments($args);

    ?>


  <!-- Submit Comment -->

  <?php
  $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '' );
  $fields = array(

    'author' =>
      '<p class="input-field"><label for="author">' . __( 'Name', 'domainreference' ) .
      ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'email' =>
      '<p class="input-field"><label for="email">' . __( 'Email', 'domainreference' ) .
      ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
      '<input id="email" name="email" class="validate" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'url' =>
      '<p class="input-field"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>',
  );

  $comments_args = array(
    'label_submit'        =>  'Submit',
    'class_submit'        =>  'btn waves-effect waves-light',
    'title_reply'         =>  'Leave a Comment',
    'comment_notes_after' =>  '',
    'comment_field'       =>  '<p class="comment-form-comment input-field"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true" class="materialize-textarea"></textarea></p>',
    'fields'              =>  apply_filters( 'comment_form_default_fields', $fields ),
    'submit_button'       =>  '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s<i class="material-icons right">send</i></button>'
  );

  comment_form($comments_args);

  ?>
</div>