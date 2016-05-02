<?php
/**
 * @package Multisite_Block_Default_Registration
 * @version 1.0
 *
 * Plugin Name: Multisite Block Default Registration
 * Plugin URI: http://www.cozmoslabs.com
 * Description: Block default registration page in multisite. Other registration pages may be used. This should be activated network wide.
 * Author: Cristian Antohe
 * Version: 1.0
 * Author URI: http://www.cozmoslabs.com
 * Network: True
 */

add_filter( 'wp_signup_location', 'mbdr_current_blog_home' );
function mbdr_current_blog_home( $location ) {
	return get_site_url();
}

add_action( 'before_signup_header', 'mbdr_redirect_signup_home' );
function mbdr_redirect_signup_home() {
	wp_redirect( get_site_url() );
	exit();
}
