<?php
/*
Plugin Name:  WP Current Time
Plugin URI:   https://github.com/gregrickaby/WP-Current-Time/
Description:  Display the current time and/or date with a shortcode <code>[current-time]</code> or <code>[current-date]</code>.
Version:      20181019
Author:       Greg Rickaby
Author URI:   https://gregrickaby.com
License:      GPL3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:  grd-current-time
*/

namespace wpct;

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

/**
 * Register shortcodes with WordPress.
 */
function shortcode_init() {
	add_shortcode( 'current-time', 'wpct\current_time' );
	add_shortcode( 'current-date', 'wpct\current_date' );
}
add_action( 'init', 'wpct\shortcode_init' );

/**
 * Current time shortcode.
 *
 * @return string The current time.
 */
function current_time( $atts ) {

	$a = shortcode_atts( array(
		'' => '',
	), $atts );

	return 'Time';
}

/**
 * Current date shortcode.
 *
 * @return string The current date.
 */
function current_date( $atts ) {

	$a = shortcode_atts( array(
		'' => '',
	), $atts );

	return 'Date';
}