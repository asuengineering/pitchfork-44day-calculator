<?php
/**
 * - Enqueue plugin scripts.
 * - Register additional scripts to be loaded with individual blocks.
 *
 * @package pitchfork-plugin-template
 */

// Example function below will need to be edited depending on the context of the plugin.
// Possible hooks: enqueue_block_assets (both), enqueue_block_editor_assets
// Old school hooks: wp_enqueue_scripts, wp_enqueue_style

add_action( 'enqueue_block_assets', 'starter_plugin_enqueue_block_scripts' );
function starter_plugin_enqueue_block_scripts() {

		$the_plugin     = get_plugin_data( plugin_dir_path( __DIR__ ) . 'fourtyfour-day.php' );
		$the_version    = $the_plugin['Version'];
		$style_version = $the_version . '.' . filemtime( plugin_dir_path( __DIR__ ) . 'css/fourtyfour-day.css' );
		$js_version = $the_version . '.' . filemtime( plugin_dir_path( __DIR__ ) . 'js/fourtyfour-day.js' );

	wp_enqueue_style ( 'pf-fourtyfour-day', plugin_dir_url( __DIR__ ) . 'css/fourtyfour-day.css',  array(), $style_version);
	wp_enqueue_script( 'pf-fourtyfour-day', plugin_dir_url( __DIR__ ) . 'js/fourtyfour-day.js',  array(), $js_version, true);

}
