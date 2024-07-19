<?php
/**
 * Plugin Name:     Pitchfork - 44 Day Calculator
 * Plugin URI:      https://github.com/asuengineering
 * Description:     Provides a shortcode for deploying a 44 day calculator on to a page. Written for [faculty.engineering.asu.edu](https://faculty.engineering.asu.edu)
 * Author:          ASU Engineering
 * Author URI:      https://engineering.asu.edu
 * Version:         1.3
 *
 * GitHub Plugin URI: https://github.com/asuengineering/pitchfork-44day-calculator
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Variable for root directory of this plugin.
define( 'STARTER_PLUGIN_BASE_PATH', plugin_dir_path( __FILE__ ) );

// Function: Activate.
// Function: Deactivate.
// Function: Execute plugin.

// Enqueue scripts.
require_once STARTER_PLUGIN_BASE_PATH . '/inc/enqueue-scripts.php';

// ACF configurations.
// require_once STARTER_PLUGIN_BASE_PATH . '/inc/acf-config.php';
// require_once STARTER_PLUGIN_BASE_PATH . '/inc/acf-register-blocks.php';

/**
 * Define shortcode for tracker output.
 * [44day-tracker]
*/

add_action( 'init', 'pf_44daytracker_register_shortcode' );

function pf_44daytracker_register_shortcode() {
	add_shortcode( '44day-tracker', 'pf_44daytracker_shortcode' );
}

function pf_44daytracker_shortcode() {

	// Calculate the default dates.

	$start = date('Y-m-d');
	$thirty = date('m/d/Y', strtotime("+30 days"));
	$deadline = date('m/d/Y', strtotime("+44 days"));
	$review = date('m/d/Y', strtotime("+45 days"));

	$content = '';
	$content .= '<form id="fourty-tracker" class="uds-form">';
	$content .= '<div class="form-group">';
	$content .= '<label for="start">Day 1:</label>';
	$content .= '<p>The day in which the search advertisement has been posted internally and externally.</p>';
	$content .= '<input class="form-control" type="date" id="start" name="tracking-start" value="' . $start . '">';
	$content .= '<dl class="calc-dates">';
	$content .= '<dt>Day 30:</dt>';
	$content .= '<dd>Initial application deadline as stated on the search advertisement.</dd>';
	$content .= '<dd class="calc-day day-30">' . $thirty . '</dd>';
	$content .= '<dt>Day 45:</dt>';
	$content .= '<dd>When the search committee can begin reviewing applications.</dd>';
	$content .= '<dd class="calc-day day-45">' . $review . '</dd>';
	$content .= '</dl></div></form>';

	return $content;
}

