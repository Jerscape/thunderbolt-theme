<?php
/**
 * Theme setup
 */
function thunderbolt_setup() {
    // Let WordPress manage <title>.
    add_theme_support('title-tag');

    // HTML5 markup support.
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Custom logo (optional).
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Allow wide/full alignments from the editor.
    add_theme_support('align-wide');

    // Menus.
    register_nav_menus([
        'primary' => __('Primary Menu', 'thunderbolt'),
    ]);
}
add_action('after_setup_theme', 'thunderbolt_setup');

/**
 * Enqueue styles & scripts
 */
function thunderbolt_assets() {
    // --- CSS: single source of truth ---
    $css_rel  = '/assets/css/styles.css';
    $css_path = get_stylesheet_directory() . $css_rel;

    // Only enqueue if the file exists (prevents 404s in early dev)
    if ( file_exists( $css_path ) ) {
        wp_enqueue_style(
            'thunderbolt-styles',
            get_theme_file_uri( $css_rel ),
            [],
            filemtime( $css_path ) // cache-bust when the file changes
        );
    }

    // --- JS (optional) ---
    $js_rel  = '/assets/js/main.js';
    $js_path = get_stylesheet_directory() . $js_rel;

    if ( file_exists( $js_path ) ) {
        wp_enqueue_script(
            'thunderbolt-main',
            get_theme_file_uri( $js_rel ),
            [],
            filemtime( $js_path ), // cache-bust
            true                   // in footer
        );
    }
}
add_action('wp_enqueue_scripts', 'thunderbolt_assets');

