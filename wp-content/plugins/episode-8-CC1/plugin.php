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
 * Plugin Name:     Know the Code Show - Episode 8 CC1
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
add_action( 'loop_start', __NAMESPACE__ . '\\demonstrate_resetting_value' );
function demonstrate_resetting_value() {
	$simulated_registry = array(
		'foo'                           => array(
			10                          => array(
				'foo_callback'          => array(
					'function'          => 'foo_callback',
					'accepted_args'     => 2,
				),
			),
			15                          => array(
				'foo_another_callback'  => array(
					'function'          => 'foo_another_callback',
					'accepted_args'     => 2,
				),
			),
		),
	);
	d( $simulated_registry );
	// CC1 - Using unset() remove registered callback 'foo_another_callback'
	unset( $simulated_registry['foo'][ 15 ]['foo_another_callback'] );
	 
	ddd( $simulated_registry );
}