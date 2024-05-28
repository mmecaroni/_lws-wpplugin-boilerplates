<?php
/********************************
 * Plugin Name: LWS WpSettings Theme
 * Plugin URI: http://www.liquidstudiodev.com/wp/lws-wpsettings-theme
 * Description: A WpSettings Theme Plugin by Liquid Studio Group
 * Version: 0.0.0
 * Author: Mario Mecaroni
 * Author URI: http://www.liquidstudiogroup.com/team/mario-mecaroni
 * License: MIT
 * Text Domain: lws-wpsettings-theme
 * GitHub Plugin URI: mmecaroni/lws-wpplugin-boilerplates/lws-wpsettings-theme
 * GitHub Branch: master
 * Release Asset: false
 */

/****** Get lost! */
if (!defined('ABSPATH')) { exit; }

/****** Constants for Plugin Environment */
define( 'LWS_WPSETTINGS_THEME_VERSION', 'v0.0.0' );
define( 'LWS_WPSETTINGS_THEME_DIR', plugin_dir_path( __FILE__ ) );
define( 'LWS_WPSETTINGS_THEME_ROOT_FILE', __FILE__ );
define( 'LWS_WPSETTINGS_THEME_ROOT_FILE_RELATIVE_PATH', plugin_basename( __FILE__ ) );
define( 'LWS_WPSETTINGS_THEME_SLUG', 'lws_theme_settings' );
define( 'LWS_WPSETTINGS_THEME_FOLDER', dirname( plugin_basename( __FILE__ ) ) );
define( 'LWS_WPSETTINGS_THEME_URL', plugins_url( '', __FILE__ ) );

/****** Display Version on Frontend Footer */
// add_action("wp_footer", function() { echo "LWS WpSettings Theme Version: " . LWS_WPSETTINGS_THEME_DIR; });

/****** Require Menu handler file */
require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'includes/menu/add-menu-pages.php';

/****** Packages */
require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/dashboard/page-dashboard.php';
require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/addons/page-addons.php';
require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/updates/page-updates.php';
require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/restapi/page-restapi.php';

/**************************************************************************************************/
/****** Enqueue Styles and Scripts ****************************************************************/

/****** ISSUES enqueue Tailwind file: SOLVED */
// require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'includes/enqueue/tailwind-cdn.php';

/****** Enqueue Styles and Scripts */
function lws_wpsettings_theme_enqueue_scripts($hook_suffix) {
	// Check if the current page belongs to the plugin's theme settings admin pages
	if (strpos($hook_suffix, 'lws_wpsettings_theme') === false) {
			return;
	}

	require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'includes/enqueue/style-tailwind.php';
	lws_wpsettings_theme_enqueue_style_tailwind();

	require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'includes/enqueue/script-htmx.php';
	lws_wpsettings_theme_enqueue_script_htmx();

	require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'includes/enqueue/script-alpinejs.php';
	lws_wpsettings_theme_enqueue_script_alpinejs();
}
add_action('admin_enqueue_scripts', 'lws_wpsettings_theme_enqueue_scripts');