<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://seconsultorweb.ml
 * @since             1.0.0
 * @package           Wp_Wapo
 *
 * @wordpress-plugin
 * Plugin Name:       WP WaPO
 * Plugin URI:        https://seoconosultorweb.ml
 * Description:       Plugin para el mejoramiento de carga.Plugin for load improvement  
 * Version:           1.0.0
 * Author:            Peter  
 * Author URI:        https://seconsultorweb.ml
 * License:           CC BY-SA
 * License URI:       https://creativecommons.org/licenses/by-sa/3.0/es/
 * Text Domain:       wp-wapo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'WP_WAPO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-wapo-activator.php
 */
function activate_wp_wapo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-wapo-activator.php';
	Wp_Wapo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-wapo-deactivator.php
 */
function deactivate_wp_wapo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-wapo-deactivator.php';
	Wp_Wapo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_wapo' );
register_deactivation_hook( __FILE__, 'deactivate_wp_wapo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-wapo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_wapo() {

	$plugin = new Wp_Wapo();
	$plugin->run();

}
run_wp_wapo();
