<h1>Headless Theme Options</h1>

<?php settings_errors(); ?>
<form action="options.php" method="post">
    <?php settings_fields( 'headless-settings-group' ); ?>
    <?php do_settings_sections('headless_mejlak'); ?>
    <?php submit_button(); ?>
</form>
