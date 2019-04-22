<?php
/*
Plugin Name: DGTheme KC Shapes
Plugin URI: http://dgtheme.com/shortcodes
Description: DGTheme KC Shapes is a plugin that helps to shape the section in KingComposer Page Builder.
Version: 1.0
Author: DGTheme
Author URI: https://themeforest.net/user/dgtheme
*/

// DEFINE PATHS
define( 'DGTKCSH_PATH', plugin_dir_path( __FILE__ ) );
define( 'DGTKCSH_URL', plugin_dir_url( __FILE__ ) );

// REGISTER ADMIN STYLES
function dgtkcsh_register_admin_styles() {

    wp_register_style( 'dgtkcsh-admin', DGTKCSH_URL . 'assets/css/admin.css', array(), '', 'all' );

    wp_enqueue_style( 'dgtkcsh-admin' );

}
add_action( 'admin_print_styles', 'dgtkcsh_register_admin_styles' );

// REGISTER STYLES
function dgtkcsh_register_styles() {

    wp_register_style( 'dgtkcsh-style', DGTKCSH_URL . 'assets/css/style.css', array(), '', 'all' );

    wp_enqueue_style( 'dgtkcsh-style' );

}
add_action('wp_enqueue_scripts', 'dgtkcsh_register_styles');

// REGISTER SCRIPTS
function dgtkcsh_register_scripts() {

    wp_register_script('dgtkcsh-scripts', DGTKCSH_URL . 'assets/js/script.js', array( 'jquery' ), '', true);

    wp_enqueue_script('dgtkcsh-scripts');

}
add_action( 'wp_enqueue_scripts', 'dgtkcsh_register_scripts' );

// INCLUDE FILES
require_once DGTKCSH_PATH . 'shortcodes/dgtkcsh_section_shapes.php';
require_once DGTKCSH_PATH . 'maps/dgtkcsh_section_shapes.php';

?>