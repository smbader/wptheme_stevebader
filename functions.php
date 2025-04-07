<?php
/**
 * SteveBader Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SteveBader
 */

if ( ! function_exists( 'stevebader_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @return void
     */
    function stevebader_setup() {
        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );
    }

endif;

add_action( 'after_setup_theme', 'stevebader_setup' );


if ( ! function_exists( 'stevebader_styles' ) ) :

    /**
     * Enqueue styles.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function stevebader_styles() {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get( 'Version' );

        $version_string = is_string( $theme_version ) ? $theme_version : false;
        wp_register_style(
            'stevebader-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $version_string
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style( 'stevebader-style' );

    }

endif;

add_action( 'wp_enqueue_scripts', 'stevebader_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';