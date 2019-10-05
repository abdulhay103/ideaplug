<?php 

	/**

	 * Plugin Name:			Idea Plug
	 * Plugin URI:			http://journeybyweb.com/
	 * Description:			Handle the ideas with this plugin.
	 * Version:				1.0.0
	 * Requires at least:	5.2
	 * Requires PHP:		7.2
	 * Author:				Abdul Hay
	 * Author URI:			http://abdulhay.journeybyweb.com/
	 * License:				GPL v2 or later
	 * License URI:			https://www.gnu.org/licenses/gpl-2.0.html
	 * Text Domain:			IdeaPlug
	 * Domain Path:			/languages

	*/

	/*function IdeaPlug_activation_hook(){}
		register_activation_hook( __FILE__, 'IdeaPlug_activation_hook' );

	function IdeaPlug_deactivation_hook(){}
		register_deactivation_hook( __FILE__, 'IdeaPlug_activation_hook' );*/


	function IdeaPlug_load_textdomain(){
		load_plugin_textdomain( 'IdeaPlug', false, dirname(__FILE__).'/languages' );
	}
	add_action( 'plugin_loaded', 'IdeaPlug_load_textdomain');


?>