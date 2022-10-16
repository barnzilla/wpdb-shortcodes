<?php

/**
 * @package wpdb shortcodes
 * @version 0.1
 */
/*
Plugin Name: wpdb Shortcodes
Plugin URI: http://www.barnzilla.ca
Description: This plugin enables administrators to interact with their database via shortcodes.
Author: Joel Barnes
Version: 0.1
Author URI: http://www.barnzilla.ca
Text Domain: wpdb-shortcodes
*/

// Direct access to file not permitted
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Call functions
include( 'functions.php' );

// [wpdb-shortcodes query="something"]
function wpdb_shortcodes_func( $atts, $content = null ) {
	
	global $wpdb;
    
	# Set possible shortcode attributes
	$wpdb_shortcodes = shortcode_atts( array(
        'page' => null,
		'element' => null
    ), $atts );

	# Create content
	$content = '<p>Hello, world!</p>';
	
	# Return content
	return( do_shortcode( $content ) );
}
add_shortcode( 'wpdb-shortcodes', 'wpdb_shortcodes_func' );

?>