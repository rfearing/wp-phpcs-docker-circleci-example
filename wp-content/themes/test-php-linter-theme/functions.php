<?php
/**
 * Example Theme Functions.
 *
 * @package WordPress
 */

// GLOBAL VARIABLES.
require_once 'functions/setup-global-variables.php';

/**
 * Adds CSS from Parent WordPress Theme
 *
 * @return void
 */
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css', array(), '1.1' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles' );
