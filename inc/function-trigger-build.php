<?php

add_action( 'admin_enqueue_scripts', 'trigger_build_enqueue' );
function trigger_build_enqueue() {
    wp_enqueue_script( 'wp-trigger-netlify-build', plugin_dir_url( __FILE__ ) . '/js/headless-trigger-build.js', array(), '20190228', true );
    wp_localize_script( 'wp-trigger-netlify-build', 'headlessTriggerBuildVars', get_option('trigger_url'));
}
