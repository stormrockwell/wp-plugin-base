<?php
/**
 * Plugin Name: WP Plugin Base
 * Plugin URI: https://www.stormrockwell.com
 * Description:
 * Version: 0.1
 * Author: Storm Rockwell
 * Author URI: https://www.stormrockwell.com
 * License: GPL3
 *
 * @package WP_Plugin_Base
 */

define( 'WPP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

require_once WPP_PLUGIN_PATH . 'vendor/autoload.php';

/**
 * Load classes from includes folder
 *
 * Exmaple:
 * includes
 * - folder
 * - - class-new-file.php (Contains the class WPP\Folder\New_File)
 */
spl_autoload_register(
	function( $class ) {
		$file_parts = explode( '\\', $class );

		// Convert class names to file paths.
		if ( count( $file_parts ) > 1 && 'WPP' === $file_parts[0] ) {

			// Remove wpp namespace.
			unset( $file_parts[0] );

			// Add class prefix to last file.
			$last_key                = array_key_last( $file_parts );
			$file_parts[ $last_key ] = 'class-' . $file_parts[ $last_key ] . '.php';

			// Set case and word delimiters.
			$file = implode( DIRECTORY_SEPARATOR, $file_parts );
			$file = strtolower( $file );
			$file = str_replace( '_', '-', $file );

			require_once WPP_PLUGIN_PATH . 'includes/' . $file;
		}
	}
);
