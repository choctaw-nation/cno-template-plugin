<?php
/**
 * Plugin Name: Choctaw Plugin Starter
 * Plugin URI: https://github.com/choctaw-nation/cno-template-plugin
 * Description: Quick Boilerplate for starting a new plugin
 * Version: 1.2.1
 * Author: Choctaw Nation of Oklahoma
 * Author URI: https://www.choctawnation.com
 * Text Domain: cno
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Requires PHP: 8.2
 * Requires at least: 6.7.0
 * Tested up to: 6.9.0
 *
 * @package ChoctawNation
 * @subpackage PluginStarter
 */

use ChoctawNation\Plugin_Loader;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

require_once __DIR__ . '/vendor/autoload.php';

$cno_plugin = new Plugin_Loader( __DIR__ );

// Plugin Lifecycle Hooks
register_activation_hook( __FILE__, array( $cno_plugin, 'activate' ) );

// Static method for uninstall since the plugin can't rely on instance methods.
register_uninstall_hook( __FILE__, array( 'ChoctawNation\Plugin_Loader', 'uninstall' ) );

// Load the Plugin
add_action( 'plugins_loaded', array( $cno_plugin, 'load_plugin' ) );
