<?php namespace Know_The_Code_Show\Episode8;
/**
 * Know the Code Show - Episode 8
 *
 * @package         Know_The_Code_Show\Episode8
 * @author          WPDevelopersClub and hellofromTonya
 * @license         GPL-2.0+
 * @link            http://wpdevelopersclub.com/
 * @copyright       2015 WP Developers Club
 *
 * @wordpress-plugin
 * Plugin Name:     Know the Code Show - Episode 8 CC2
 * Plugin URI:      http://wpdevelopersclub.com/
 * Description:     Supporting code for the episode
 * Version:         1.0.0
 * Author:          WP Developers Club and Tonya
 * Author URI:      http://wpdevelopersclub.com
 * Text Domain:     wpdevsclub
 * Requires WP:     3.5
 * Requires PHP:    5.3
 */


add_filter( 'the_title', __NAMESPACE__ . '\\demonstrating_unregistering_callback_from_event_registry', 9, 2 );
function demonstrating_unregistering_callback_from_event_registry( $post_title, $post_id ) {
	// We skip over this callback if the loop hasn't started yet
	global $wp_query;
	if ( ! $wp_query->in_the_loop ) {
		return $post_title;
	}
	ddd( 'Whoops, ' . __FUNCTION__ . ' did not unregister!' );
}

add_action( 'loop_start', __NAMESPACE__ . '\\demonstration' );
function demonstration() {
	remove_filter( 'the_title', __NAMESPACE__ . '\\demonstrating_unregistering_callback_from_event_registry', 9 );
}