<?php
/******************************************
 * TailwindCSS v4.0.0 | v3.4.1
 */

function lws_wpsettings_theme_enqueue_style_tailwind() {
	// $local_script_url = LWS_WPSETTINGS_THEME_URL . '/assets/vendors/style-test.css';
	// $cdn_script_url = 'https://cdn.tailwindcss.com';
	$local_script_url = LWS_WPSETTINGS_THEME_URL . '/assets/css/style.css';
	$cdn_script_url = 'https://cdn.tailwindcss.com';

	if (file_exists(LWS_WPSETTINGS_THEME_DIR . 'assets/css/style.css')) {
			wp_enqueue_style('lws-theme-tailwind', $local_script_url, array(), '4.0.0');
	} else {
			wp_enqueue_style('lws-theme-tailwind-cdn', $cdn_script_url, array(), '3.4.1');
	}
}



// function lws_wpsettings_boilerplate_enqueue_styles($hook_suffix) {
// // Check if the current page belongs to the plugin's admin pages
// if (strpos($hook_suffix, 'lws_wpsettings_boilerplate') === false) {
// 		return;
// }

// wp_enqueue_style(
//   'tailwindcss', 
//   'https://cdn.tailwindcss.com', 
//   array(), 
//   '3.4.1', 
//   'all'
// );
// }
// add_action('admin_enqueue_scripts', 'lws_wpsettings_boilerplate_enqueue_styles');