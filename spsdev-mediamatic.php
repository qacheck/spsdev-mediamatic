<?php
/**
 * Plugin Name: SPSDEV Mediamatic
 * Plugin URI:  http://dev.sps.vn
 * Description: Tổ chức các file tải lên vào cây thư mục trên wordpress.
 * Version:     1.7
 * Author:      qqngoc2988
 * Author URI:  https://sps.vn
 * Text Domain: spsdev-mediamatic
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages/
 */

/*

This plugin uses Open Source components. You can find the source code 
of their open source projects along with license information below. 
We acknowledge and are grateful to these developers for their contributions to open source.

--------------------------------------------------------------------

Project: FileBird – WordPress Media Library Folders (version:2.0)
Author: Ninja Team
Url: https://wordpress.org/plugins/filebird/
Lisence: GPL (General Public License)

--------------------------------------------------------------------

Project: Folders – Organize Pages, Posts and Media Library Folders with Drag and Drop (version:2.1.1)
Author: Premio
Url: https://wordpress.org/plugins/folders/
Lisence: GPL (General Public License)

*/

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'SPSDEV_MEDIAMATIC__FILE__', __FILE__ );
define( 'SPSDEV_MEDIAMATIC_FOLDER', 'spsdev_mediamatic_wpfolder' );
define( 'SPSDEV_MEDIAMATIC_VERSION', '1.7' );
define( 'SPSDEV_MEDIAMATIC_PATH', plugin_dir_path( SPSDEV_MEDIAMATIC__FILE__ ) );
define( 'SPSDEV_MEDIAMATIC_URL', plugins_url( '/', SPSDEV_MEDIAMATIC__FILE__ ) );
define( 'SPSDEV_MEDIAMATIC_ASSETS_URL', SPSDEV_MEDIAMATIC_URL . 'assets/' );
define( 'SPSDEV_MEDIAMATIC_TEXT_DOMAIN', 'spsdev-mediamatic' );
define( 'SPSDEV_MEDIAMATIC_PLUGIN_BASE', plugin_basename( SPSDEV_MEDIAMATIC__FILE__ ) );
define( 'SPSDEV_MEDIAMATIC_PLUGIN_NAME', 'SPSDEV Mediamatic' );

//register_activation_hook( SPSDEV_MEDIAMATIC__FILE__, 'spsdev_mediamatic_wpfolder' );
function spsdev_mediamatic_wpfolder() {
	global $wpdb;
	$wpdb->update($wpdb->prefix.'term_taxonomy', ['taxonomy'=>SPSDEV_MEDIAMATIC_FOLDER], ['taxonomy'=>'mediamatic_wpfolder'],['%s'],['%s']);
}

function spsdev_mediamatic_plugins_loaded(){

	// main files
	include_once ( SPSDEV_MEDIAMATIC_PATH . 'inc/plugin.php' );
	include_once ( SPSDEV_MEDIAMATIC_PATH . 'inc/functions.php' );
	
	load_plugin_textdomain(SPSDEV_MEDIAMATIC_TEXT_DOMAIN, false, plugin_basename(__DIR__) . '/languages/');
}


add_action('plugins_loaded', 'spsdev_mediamatic_plugins_loaded');





