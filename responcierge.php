<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.responcierge.com
 * @since             1.0.0
 * @package           Responcierge
 *
 * @wordpress-plugin
 * Plugin Name:       Responcierge
 * Plugin URI:        https://www.responcierge.com
 * Description:       Adds the Responcierge widget embed code to your Wordpress website.
 * Version:           1.0.0
 * Author:            Responcierge
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       responcierge
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-responcierge-activator.php
 */
function activate_responcierge() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-responcierge-activator.php';
	Responcierge_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-responcierge-deactivator.php
 */
function deactivate_responcierge() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-responcierge-deactivator.php';
	Responcierge_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_responcierge' );
register_deactivation_hook( __FILE__, 'deactivate_responcierge' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-responcierge.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_responcierge() {

	$plugin = new Responcierge();
	$plugin->run();

}
run_responcierge();
