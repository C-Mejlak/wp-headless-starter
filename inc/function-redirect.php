<?php

add_action( 'init', 'redirect_and_cors_setup' );

function redirect_and_cors_setup() {
    $frontend_url = get_option('frontend_url');
    $allow_cors = get_option('enable_cors');

    if( $allow_cors ) {
        header("Access-Control-Allow-Origin: {$frontend_url}");
    }


}
}
