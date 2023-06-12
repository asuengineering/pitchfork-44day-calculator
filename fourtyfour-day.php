<?php
/**
 * Plugin Name:     Pitchfork - 44 Day Calculator
 * Plugin URI:      https://github.com/asuengineering
 * Description:     Provides a shortcode for deploying a 44 day calculator on to a page. Written for [faculty.engineering.asu.edu](https://faculty.engineering.asu.edu)
 * Author:          ASU Engineering
 * Author URI:      https://engineering.asu.edu
 * Version:         0.1
 *
 * @package         starter_plugin
 * Text Domain:     (text)
 *
 * GitHub Plugin URI: https://github.com/asuengineering
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
require_once STARTER_PLUGIN_BASE_PATH . 'inc/enqueue-scripts.php';


add_action( 'init', 'pf_44daytracker_register_shortcode' );

function pf_44daytracker_register_shortcode() {
	add_shortcode( '44day-tracker', 'pf_44daytracker_shortcode' );
}

function pf_44daytracker_shortcode() {

	// Calculate the default dates.

	$start = date('Y-m-d');
	$thirty = date('F d, Y', strtotime("+30 days"));
	$deadline = date('F d, Y', strtotime("+44 days"));
	$review = date('F d, Y', strtotime("+45 days"));

	$content = '';
	$content .= '<form id="fourty-tracker" class="uds-form">';
	$content .= '<div class="form-group">';
	$content .= '<label for="start">National ad date</label>';
	$content .= '<input class="form-control" type="date" id="start" name="tracking-start" value="' . $start . '">';
	$content .= '<dl class="calc-dates">';
	$content .= '<dt>Day 30</dt><dd class="day-30">' . $thirty . '</dd>';
	$content .= '<dt>Deadline to apply (Day 44)</dt><dd class="day-44">' . $deadline . '</dd>';
	$content .= '<dt>Applications review date</dt><dd class="day-45">' . $review . '</dd>';
	$content .= '</dl></div></form>';

	return $content;
}

