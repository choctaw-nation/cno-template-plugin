<?php
/**
 * Plugin Name: Choctaw Plugin Template
 * Description: A Plugin Scaffolding.
 * Version: 1.0
 * Author: Choctaw Nation of Oklahoma
 * Author URI: https://www.choctawnation.com
 * Text Domain: cno
 * License: GPLv3 or later
 *
 * @package ChoctawNation
 * @subpackage 
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

require_once __DIR__ . '/inc/class-plugin-loader.php';
$plugin_loader = new Plugin_Loader();