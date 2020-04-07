<?php
/**
 * GLOBAL VARIABLES.
 *
 * @package WordPress
 * @subpackage Laboratory
 */

// Examples variables to include throughout the project.
global $theme_dir,
$theme_uri,
$home,
$site_title;

$theme_dir  = get_template_directory();
$theme_uri   = get_template_directory_uri();
$home       = home_url( '/' );
$site_title = get_bloginfo( 'name' );
