<?php

$frontend_url = get_option('frontend_url');
if( !empty($frontend_url) && !is_admin() ) {
    wp_redirect($frontend_url);
    exit;
}

$allow_cors = (get_option('enable_cors') == 1 ? true : false);

if( $allow_cors ) {
    add_action( 'init', 'allow_origin' );
        function allow_origin() {
        header('Access-Control-Allow-Origin: '. $frontend_url);
    }
}
