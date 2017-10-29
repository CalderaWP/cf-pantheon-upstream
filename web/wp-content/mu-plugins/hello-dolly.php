<?php
/**
 * @package Hello_Dolly
 * @version 2.0
 */
/*
Plugin Name: Hello Dolly
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it is a widget that shows the current CF version and WP version so that information is encoded in the videos of the tests playing
Author: Matt Chromwell
Version: 2.0
Author URI: http://ma.tt/
*/

class APEX_TEST_Widget extends WP_Widget {

	/**
	 * Create widget
	 *
	 * @since unknown
	 */
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, __('Version Info Widget', 'caldera-forms' ) );

	}

	/**
	 * Widget output
	 *
	 * @since unknown
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		global  $wp_version;
		if( defined( 'CFCORE_VER' )  ) {
			echo '<pre>CFCORE_VER' . CFCORE_VER . '</pre>';
		}
		echo '<pre>$wp_version' . $wp_version . '</pre>';
		echo '<pre>get_current_user_id' . get_current_user_id() . '</pre>';
	}

}



add_action( 'widgets_init', function () {
	register_widget( new APEX_TEST_Widget() );
});