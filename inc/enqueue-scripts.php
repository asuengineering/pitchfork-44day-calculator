<?php
/**
 * - Enqueue plugin scripts.
 * - Register additional scripts to be loaded with individual blocks.
 *
 * @package fourtyfourday
 */

add_action( 'enqueue_block_assets', 'fourtyfourday_enqueue_block_scripts' );
function fourtyfourday_enqueue_block_scripts() {

	global $post;

	$the_plugin     = get_plugin_data( plugin_dir_path( __DIR__ ) . 'fourtyfour-day.php' );
	$the_version    = $the_plugin['Version'];
	$style_version = $the_version . '.' . filemtime( plugin_dir_path( __DIR__ ) . 'dist/css/fourtyfour-day.css' );
	$js_version = $the_version . '.' . filemtime( plugin_dir_path( __DIR__ ) . 'dist/js/fourtyfour-day.js' );

	wp_register_style ( 'pf-fourtyfour-day-style', plugin_dir_url( __DIR__ ) . 'dist/css/fourtyfour-day.css',  array(), $style_version);
	wp_register_script( 'pf-fourtyfour-day', plugin_dir_url( __DIR__ ) . 'dist/js/fourtyfour-day.js',  array(), $js_version, true);

	if( has_shortcode( $post->post_content, '44day-tracker') && ( is_single() || is_page() ) ){
		wp_enqueue_style ( 'pf-fourtyfour-day-style' );
		wp_enqueue_script( 'pf-fourtyfour-day' );
	}

}

