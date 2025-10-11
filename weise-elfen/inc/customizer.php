<?php
/**
 * Theme Customizer
 *
 * @package WeisseElfen
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Customizer JS
 */
function weise_elfen_customize_preview_js() {
    wp_enqueue_script(
        'weise-elfen-customizer',
        get_template_directory_uri() . '/js/customizer.js',
        array('customize-preview'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_preview_init', 'weise_elfen_customize_preview_js');
