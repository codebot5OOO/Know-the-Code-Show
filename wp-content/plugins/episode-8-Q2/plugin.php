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
 * Plugin Name:     Know the Code Show - Episode 8 Q2
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
 * Q2 & CC2
 ***********/
add_action( 'loop_start', __NAMESPACE__ . '\\simulating_the_registry_loop' );
function simulating_the_registry_loop() {
	$simulated_registry = array(
		'foo'                           	=> array(
			10                          	=> array(
				'foo_callback'          => array(
					'function'	=> 'foo_callback',
					'accepted_args'	=> 2,
				),
			),
			15                          	=> array(),
		),
	);
	
	// CC2 (after you answer Q2)
	
	foreach( $simulated_registry as $event_name => $registered_callbacks ) {
		foreach( $registered_callbacks as $priority => $callbacks ) {
			// Q2 What happens here when the loop hits priority 15?  Will this loop run?
			foreach( $callbacks as $callback => $_the ) {
				d( $callbacks );
			}
		}
	}
}