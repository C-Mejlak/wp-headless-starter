<?php

/* -----------------------------
ADMIN PAGE
----------------------------- */

function headless_add_admin_page() {

    // Creates main menu item
    add_menu_page(
        'Headless Theme Options', // Page Title
        'Headless', // Menu Title
        'manage_options', // Capability
        'headless_mejlak', // Slug
        'headless_theme_create_page', // Callback
        get_template_directory_uri() . '/img/dashicon.png', // Dashicon
        7 // Menu position
    );

    // Create Sub Pages
    /*
    This is the main page. It is important to use the same page title as the
    parent and  the same slug. Otherwise you'll end up with duplicate pages.
    */
    add_submenu_page(
        'headless_mejlak', // parent Slug
        'Headless Theme Options', // page Title
        'Settings', // Menu Name
        'manage_options', // Capability
        'headless_mejlak', //slug
        'headless_theme_create_page' // callback
    );

    // Active Custom Settings
    add_action( 'admin_init', 'headless_custom_settings');
}

add_action('admin_menu', 'headless_add_admin_page');

function headless_custom_settings() {
    register_setting( 'headless-settings-group', 'frontend_url');
    register_setting( 'headless-settings-group', 'enable_cors');

    add_settings_section( 'headless-frontend-options', 'Frontend Options', 'headless_frontend_options', 'headless_mejlak' );
    add_settings_field('frontend-url', 'Frontend URL', 'headless_frontend_url', 'headless_mejlak', 'headless-frontend-options');
    add_settings_field('enable-cors', 'Enable CORS?', 'headless_enable_cors', 'headless_mejlak', 'headless-frontend-options');

}

function headless_frontend_options() {
    // echo '<h3>Frontend Options</h3>';
}

function headless_frontend_url() {
    $frontend_url = esc_attr( get_option('frontend_url' ) );
    echo '<input type="url" name="frontend_url" value="'. $frontend_url .'" placeholder="https://example.com" />';
}

function headless_enable_cors() {
    $enable_cors = get_option('enable_cors');
    ?>
    <input type="checkbox" name="enable_cors" value="1" <?php checked('1', $enable_cors); ?> />
    <?php
}

function headless_theme_create_page() {
    // Generation of admin page
    require_once get_template_directory() . '/inc/templates/headless-admin.php';
}

// function headless_theme_settings_page() {}
