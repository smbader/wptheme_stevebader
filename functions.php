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