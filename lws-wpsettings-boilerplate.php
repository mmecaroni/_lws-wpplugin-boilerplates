<?php
/********************************
 * Plugin Name: LWS WpSettings Boilerplate
 * Plugin URI: http://www.liquidstudiodev.com/wp/lws-wpsettings-boilerplate
 * Description: A WpSettings Boilerplate Plugin by Liquid Studio Group
 * Version: 0.0.0
 * Author: Mario Mecaroni
 * Author URI: http://www.liquidstudiogroup.com/team/mario-mecaroni
 * License: MIT
 * Text Domain: lws-wpsettings-boilerplate
 * GitHub Plugin URI: mmecaroni/lws-wpsettings-boilerplate
 * GitHub Branch: master
 * Release Asset: false
 */

/****** Get lost! */
if (!defined('ABSPATH')) { exit; }

/****** Constants for Plugin Environment */
define( 'LWS_WPSETTINGS_BOILERPLATE_VERSION', 'v0.0.0' );
define( 'LWS_WPSETTINGS_BOILERPLATE_DIR', plugin_dir_path( __FILE__ ) );
define( 'LWS_WPSETTINGS_BOILERPLATE_ROOT_FILE', __FILE__ );
define( 'LWS_WPSETTINGS_BOILERPLATE_ROOT_FILE_RELATIVE_PATH', plugin_basename( __FILE__ ) );
define( 'LWS_WPSETTINGS_BOILERPLATE_SLUG', 'lws_admin_settings' );
define( 'LWS_WPSETTINGS_BOILERPLATE_FOLDER', dirname( plugin_basename( __FILE__ ) ) );
define( 'LWS_WPSETTINGS_BOILERPLATE_URL', plugins_url( '', __FILE__ ) );

/****** Display Version on Frontend Footer */
add_action("wp_footer", function() { echo "LWS WpSettings Boilerplate Version: " . LWS_WPSETTINGS_BOILERPLATE_DIR; });

/****** Require Menu handler file*/
require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'includes/menu/add-menu-pages.php';

/****** Packages */
require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/page-dashboard.php';
require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/updates/page-updates.php';

/**************************************************************************************************/
/****** Enqueue Styles and Scripts ****************************************************************/

/****** ISSUES enqueue Tailwind file */
require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'includes/enqueue/tailwind-cdn.php';

/****** Enqueue Styles and Scripts */
function lws_wpsettings_boilerplate_enqueue_scripts($hook_suffix) {
	// Check if the current page belongs to the plugin's admin pages
	if (strpos($hook_suffix, 'lws_wpsettings_boilerplate') === false) {
			return;
	}

  wp_enqueue_script(
    'htmx', 
    plugin_dir_url(__FILE__) . 'assets/vendors/htmx@1.9.10.min.js', 
    array(), '1.9.10', true
  );

	wp_enqueue_script(
		'alpinejs', 
		plugin_dir_url(__FILE__) . 'assets/vendors/alpine@3.13.5.min.js', 
		array(), '3.13.5', true);
}
add_action('admin_enqueue_scripts', 'lws_wpsettings_boilerplate_enqueue_scripts');