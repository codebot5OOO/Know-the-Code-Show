<?php namespace Know_The_Code_Show\Episode10;

/**
 * Know the Code Show - Episode 10
 *
 * @package         Know_The_Code_Show\Episode10
 * @author          WPDevelopersClub and hellofromTonya
 * @license         GPL-2.0+
 * @link            http://wpdevelopersclub.com/
 * @copyright       2015 WP Developers Club
 *
 * @wordpress-plugin
 * Plugin Name:     Know the Code Show - Episode 10
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
 * CC1-2
 ***********/

add_filter( 'protected_title_format',   __NAMESPACE__ . '\\post_title_format', 10, 2 );
add_filter( 'private_title_format',     __NAMESPACE__ . '\\post_title_format', 10, 2 );
/**
 * Post Title Format
 *
 * @since 1.0.0
 *
 * @param string  $prepend Text displayed before the post title.
 *                         Default 'Protected: %s'.
 * @param WP_Post $post    Current post object.
 * @return string Returns the amended post title
 */
function post_title_format( $prepend, $post ) {
	
	// CC1 - Replace pseudocode with the proper WordPress function to know which filter is being fired.
	if ( 'private_title_format' == current_filter() ) {
		$prepend = 'WooHoo, you figured it out';
	}
	
	// CC2 - Replace pseudocode with the proper WordPress function to check if the specified event is currently being fired.
	if ( doing_filter( 'private_title_format' ) ) {
		$prepend = 'Excellent job. You figured it out';
	}
	
	$mock = apply_filters( 'ktcs_the_mock', false, $post );
	
	return $prepend;
}

add_filter( 'ktcs_do_the_mock', __NAMESPACE__ . '\\do_the_mock', 10, 2 );
add_filter( 'ktcs_the_mock',  __NAMESPACE__ . '\\do_the_mock', 10, 2 );
function do_the_mock( $mock, $post ) {
	global $wp_current_filter;
	d( $wp_current_filter );
	
	// Q1.a - What is contained in the global $wp_current_filter?
	
	// Q1.b - And where is it assigned?
	
	// Q1.c - Will this evaluate to true? Why?
	echo in_array( 'ktcs_the_mock', $wp_current_filter )
	 	? 'Yes, it is a current filter<br/>'
	 	: 'No, it is not a current filter<br/>';
	
	// Q2 - Will this evaluate to true? Why?
	 echo doing_filter( 'ktcs_the_mock' ) && doing_filter( 'private_title_format' )
	 	? 'Excellent, we are doing both filters<br/>'
	 	: 'No, we are NOT doing both filters<br/>';
	
	// Q3 - Will this evaluate to true? Why?
	 echo 'private_title_format' == current_filter()
	 	? 'Yes, private_title_format is the current filter<br/>'
	 	: 'No, private_title_format is NOT the current filter<br/>';
	
	// Q4 - What is the difference between current_filter() and doing_filter()?
	
	return $mock;
}