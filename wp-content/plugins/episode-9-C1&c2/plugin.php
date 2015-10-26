<?php namespace Know_The_Code_Show\Episode9;
/**
 * Know the Code Show - Episode 9
 *
 * @package         Know_The_Code_Show\Episode9
 * @author          WPDevelopersClub and hellofromTonya
 * @license         GPL-2.0+
 * @link            http://wpdevelopersclub.com/
 * @copyright       2015 WP Developers Club
 *
 * @wordpress-plugin
 * Plugin Name:     Know the Code Show - Episode 9
 * Plugin URI:      http://wpdevelopersclub.com/
 * Description:     Supporting code for the episode
 * Version:         1.0.0
 * Author:          WP Developers Club and Tonya
 * Author URI:      http://wpdevelopersclub.com
 * Text Domain:     wpdevsclub
 * Requires WP:     3.5
 * Requires PHP:    5.3
 */
/************
 * CC1 & Q1
 ***********/
add_action( 'loop_start', __NAMESPACE__ . '\\simulate_apply_filters' );
function simulate_apply_filters() {
	$event_registry_mock = array(
		'foo'                           	=> array(
			9                           	=> array(
				'foo_9'                 => array(
					'function'      => 'foo_9',
					'accepted_args' => 2,
				),
			),
			10                          	=> array(
				'foo_10'                => array(
					'function'      => 'foo_10',
					'accepted_args' => 2,
				),
				'bar_10'                => array(
					'function'	=> 'bar_10',
					'accepted_args' => 2,
				),
				'baz_10'                => array(
					'function'      => 'baz_10',
					'accepted_args' => 2,
				),
			),
			15                          	=> array(
				'foo_15'                => array(
					'function'      => 'foo_15',
					'accepted_args' => 2,
				),
			),
		),
	);
	d( $event_registry_mock );
	// Q2.a
	$current_element = current( $event_registry_mock['foo'] );
	
	// CC1 and Q2.b - Move me to the 2nd element
	next( $event_registry_mock['foo'] );
	
	// CC2 Return me to the first element
	// returns internal pointer to the previous element
	prev( $event_registry_mock['foo'] );

	// resets internal pointer to first element
	reset( $event_registry_mock['foo'] );

}