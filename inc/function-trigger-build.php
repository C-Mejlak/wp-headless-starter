<?php

add_action( 'save_post', 'fireFunctionOnSave' );

function fireFunctionOnSave($post_id) {
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) {
        return;
    }
    $trigger_url = get_option('trigger_url');
    $response = Requests::post( $trigger_url );
}
