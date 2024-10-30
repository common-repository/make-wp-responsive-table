<?php
/*
Author: Nguyen Quoc Hung
Author URI: https://tiengtrungquoc.net/
Plugin Name: Make WP Responsive Table
Version: 1.0
Description: A custom CSS plugin to make tables responsive in WordPress.
*/

// Enqueue custom CSS
function make_wp_responsive_table_enqueue() {
    wp_enqueue_style( 'make-wp-responsive-table-css', plugins_url( 'custom.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'make_wp_responsive_table_enqueue' );
