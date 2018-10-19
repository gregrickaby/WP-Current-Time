<?php
/*
Plugin Name:       WP Current Time
Plugin URI:        https://github.com/gregrickaby/WP-Current-Time/
Description:       Display the current time and/or date with a shortcode <code>[current-time]</code> or <code>[current-date]</code>.
Version:           1.0.0
Author:            Greg Rickaby
Author URI:        https://gregrickaby.com
License:           GPL3
License URI:       https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:       wpct
Requires at least: 4.0
Tested up to:      4.9.8
Stable tag:        1.0.0
Contributors:      gregrickaby
Tags:              time, date
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

	// Set up defaults.
	$defaults = array(
		'format'   => 'h:i:s',
		'timezone' => '',
	);

	// Parse attributes.
	$args = shortcode_atts( $defaults, $atts );

	// Get the current time.
	$now = new \DateTime( $args['timezone'] );

	// Create markup.
	ob_start();
	?>
	<time class="current-time" datetime="<?php echo esc_attr( $now->format( 'H:i:s' ) ); ?>"><?php echo esc_html( $now->format( $args['format'] ) ); ?></time>
	<?php
	return ob_get_clean();
}

/**
 * Current date shortcode.
 *
 * @return string The current date.
 */
function current_date( $atts ) {

	// Set up defaults.
	$defaults = array(
		'format'   => 'm/d/Y',
		'timezone' => '',
	);

	// Parse attributes.
	$args = shortcode_atts( $defaults, $atts );

	// Get the current date.
	$now = new \DateTime( $args['timezone'] );

	// Create markup.
	ob_start();
	?>
	<time class="current-date" datetime="<?php echo esc_attr( $now->format( 'c' ) ); ?>"><?php echo esc_html( $now->format( $args['format'] ) ); ?></time>
	<?php
	return ob_get_clean();
}
