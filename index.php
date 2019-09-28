<?php

$frontend_url = get_option('frontend_url');
if( !empty( $frontend_url ) ) {
 wp_redirect($frontend_url);
 exit;
}
