<?php

// This is custom function
// 
// 
// 

/* ---------------------------------------------------------- */


# plugin yang harus di install
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
    $plugins = array(

        array(
            'name'        => 'Post Hit Counter',
            'slug'        => 'post-hit-counter',
            'is_callable' => 'post-hit-counter',
        ),
        array(
            'name'        => 'Fluid Player',
            'slug'        => 'fluid-player',
            'is_callable' => 'fluid-player',
        ),

    );

    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );
    tgmpa( $plugins, $config );
}



// Show views count function
function show_count() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    // echo $plugin_post_hit;
    if ( is_plugin_active('post-hit-counter/post-hit-counter.php') ) {
        $id = get_the_ID();
        $category = get_the_category();
        $link = get_category_link( $category[0]->term_id );

        echo '<div class="post-view-count">';
        echo '<div class="post-category"><a href="'.$link.'">'. $category[0]->cat_name . '</a></div>';
        echo '<div class="views"><span><i class="material-icons views-icon">visibility</i></span>';
        echo do_shortcode( '[hit_count post='.$id.']' );
        echo '</div></div>';
    } 

}


//  METABOX VIDEO SOURCE

function player_meta_box() {

    add_meta_box(
        'player-box',
        'Video Source',
        'player_meta_box_callback',
        'post',
        'advanced',
        'high'
    );
}

add_action( 'add_meta_boxes', 'player_meta_box' );

function player_meta_box_callback( $post ) {

    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'player_box_nonce', 'player_box_nonce' );

    $video_url = get_post_meta( $post->ID, '_video_url', true );
    $embed_video = get_post_meta( $post->ID, '_embed_video', true );


    echo '<div class=""><label>Intput Video File Url</label><input style="width:100%" id="video_url" name="video_url" value="' . esc_attr( $video_url ) . '"></div><br /><div>OR</div> <br/>';
    echo '<div class=""><label>Use your embed code</label><textarea style="width:100%; height:100px;" id="embed_video" name="embed_video">' . $embed_video . '</textarea></div>';
}

function save_player_meta_box( $post_id ) {
    // Check if our nonce is set.
    if ( ! isset( $_POST['player_box_nonce'] ) ) {
        return;
    }
    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['player_box_nonce'], 'player_box_nonce' ) ) {
        return;
    }
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    }
    else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }
    /* OK, it's safe for us to save the data now. */
    // Make sure that it is set.
    if ( ! isset( $_POST['video_url'] ) && ! isset( $_POST['embed_video'] ) ) {
        return;
    }
    // Sanitize user input.
    $videourl = sanitize_text_field( $_POST['video_url'] );
    $embedvideo = $_POST['embed_video'];
    // Update the meta field in the database.
    update_post_meta( $post_id, '_video_url', $videourl );
    update_post_meta( $post_id, '_embed_video', $embedvideo );

}
add_action( 'save_post', 'save_player_meta_box' );

// Move metabox high to above editor
add_action('edit_form_after_title', function() {
    global $post, $wp_meta_boxes;
    do_meta_boxes(get_current_screen(), 'advanced', $post);
    unset($wp_meta_boxes[get_post_type($post)]['advanced']);
});




// Show Video di post

function show_video($postid) {
    $video_url = get_post_meta( $postid, '_video_url', true );
    $embed_video = get_post_meta( $postid, '_embed_video', true );
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );


    if ( isset($video_url) && !empty($video_url) && is_plugin_active('fluid-player/fluid-player.php') ) {

        $thumb = get_the_post_thumbnail_url($postid, 'full');
        echo '<div class="post-video">';
        echo do_shortcode( '[fluid-player video="'. $video_url .'" allow-download="true" playback-speed-control="true" responsive="true" layout="default" poster-image="'.$thumb.'"]' );
        echo '</div>';


    }  else if  ( isset($embed_video) && !empty($embed_video) ) {
        echo '<div class="post-video">';
        echo $embed_video;
        echo '</div>';
    }

}