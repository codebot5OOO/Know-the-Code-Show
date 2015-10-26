<?php namespace Know_The_Code_Show\Episode11;

/**
 * Know the Code Show - Episode 11
 *
 * @package         Know_The_Code_Show\Episode11
 * @author          WPDevelopersClub and hellofromTonya
 * @license         GPL-2.0+
 * @link            http://wpdevelopersclub.com/
 * @copyright       2015 WP Developers Club
 *
 * @wordpress-plugin
 * Plugin Name:     Know the Code Show - Episode 11
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
 * Q2-4
 ***********/

add_action( 'protected_title_format',   __NAMESPACE__ . '\\post_title_format', 10, 2 );
add_action( 'private_title_format',     __NAMESPACE__ . '\\post_title_format', 10, 2 );
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
	
	// Q2 - Why did this callback fire when I used add_action() to register it?
	echo 'Hey why did this callback get called when we used add_action() on lines 28-29?';
	
	// Q3 - Do these two function evaluate to be the same? Why? Explain your answer.
	if ( current_filter() === current_action() ) {
		d( 'Yes, both current_ are the same!' );
	}
	
	 //Q4 - Will both of these conditions evaluate to true? Why? Explain your answer.
	if ( doing_filter( 'private_title_format' ) && doing_action( 'private_title_format' ) ) {
		d( 'Yes, both doing_ are the same!' );
	}
	
	return $prepend;
}