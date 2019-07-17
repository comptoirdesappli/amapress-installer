<?php
/**
 * Plugin Name: Installateur du plugin Amapress
 * Plugin URI: https://github.com/comptoirdesappli/amapress-installer
 * Description: Installateur du plugin Amapress
 * Version: 1.0
 * Author: ShareVB
 * Author URI: http://amapress.fr/
 * License: License: GPLv2 or later
 * Requires WP: 4.4
 * Requires PHP: 5.6
 * GitHub Plugin URI: comptoirdesappli/amapress-installer
 */

require_once __DIR__ . '/vendor/autoload.php';
WP_Dependency_Installer::instance()->run( __DIR__ );
add_filter(
	'wp_dependency_timeout',
	function( $timeout, $source ) {
		$timeout = $source !== basename( __DIR__ ) ? $timeout : 14;
		return $timeout;
	},
	10,
	2
);