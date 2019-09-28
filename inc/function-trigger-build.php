<?php

add_action( 'save_post', 'trigger_build' );
function trigger_build($post_id) {
  if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) {
    return;
  }
  $build_url = get_option('build_url');
  $response = Requests::post( $build_url );
}
