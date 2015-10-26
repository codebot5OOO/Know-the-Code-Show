<?php namespace Know_The_Code_Show\Episode7;
/**
 * Know the Code Show - Episode 7
 *
 * @package         Know_The_Code_Show\Episode7
 * @author          WPDevelopersClub and hellofromTonya
 * @license         GPL-2.0+
 * @link            http://wpdevelopersclub.com/
 * @copyright       2015 WP Developers Club
 *
 * @wordpress-plugin
 * Plugin Name:     Know the Code Show - Episode 7 C1
 * Plugin URI:      http://wpdevelopersclub.com/
 * Description:     Supporting code for the episode
 * Version:         1.0.0
 * Author:          WP Developers Club and Tonya
 * Author URI:      http://wpdevelopersclub.com
 * Text Domain:     wpdevsclub
 * Requires WP:     3.5
 * Requires PHP:    5.3
 */

/********
 * C1
 *******/
 
add_action( 'loop_start', __NAMESPACE__ . '\\demonstrate_two_methods_to_remove_last_element' );
function demonstrate_two_methods_to_remove_last_element() {
	$demo_array = array(
		'foo'       => 'some foo value',
		'bar'       => 'some bar value',
		'baz'       => 'some baz value',
		'foobar'    => 'some foobar value',
	);
	d( $demo_array );
	
	// Method 1 
	//unset( $demo_array['foobar'] );

	//d( $demo_array );

	// Method 2
	$last_element = array_pop($demo_array);

	ddd( $demo_array );
}