<?php
/**
 * Add Post Type Instructions.
 *
 * For A Better UX
 *
 * @package   Add_Post_Type_Instructions
 * @author    Dave Winter
 * @license   GPL-2.0+
 * @link      https://dauid.us
 * @copyright 2014-2018 dauid.us
 *
 * @wordpress-plugin
 * bork
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-add-post-type-instructions.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */
register_activation_hook( __FILE__, array( 'Add_Post_Type_Instructions', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Add_Post_Type_Instructions', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Add_Post_Type_Instructions', 'get_instance' ) );


/*
 * Custom action to let other plugins start after this one is loaded
 *
 */
do_action( 'APTI_loaded', plugin_dir_path( __FILE__ ) );

/**
 * Load translations
 */
function apti_load_textdomain() {
	load_plugin_textdomain( 'apti', false, dirname(plugin_basename(__FILE__)) . '/languages/' );
}
add_action( 'init', 'apti_load_textdomain', 1 );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *---------------------------------------------------------------------


 /*

 what up homies
 */

hello hello hello hello hello hello hello

