<?php

/*
 * Plugin Name:Quiits call me back widget
 * Plugin URI: https://www.callmebackwidget.com/
 * description: Free call me back plugin for wordpress to Increase Your Website Conversion Up To 70%.
 * Author:Quiits
 * Author URI: http://www.quiits.com/
 * License: Quiits
 * Version: 3.0
 */


if (! class_exists ( 'WPQcallback_Plugin' )) {
	class WPQcallback_Plugin {
		function __construct() {
         add_action ( 'wp_enqueue_scripts', array( $this, 'get_quiits_call_back_script' ) );
			//add_action ( 'admin_enqueue_scripts', array( $this, 'get_quiits_call_back_script' ) );
		}
    function get_quiits_call_back_script() {
			wp_enqueue_script ( 'call_back-js', 'https://callback.menetalk.com/callme/call_back_v2_13.js' );
		}
	}
	
	$var = new WPQcallback_Plugin();
}
?>