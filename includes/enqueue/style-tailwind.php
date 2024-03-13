<?php
/******************************************
 * TailwindCSS v3.4.1
 */

function lws_wpsettings_boilerplate_enqueue_style_tailwind() {

	$local_script_path = plugin_dir_path(__FILE__) . 'assets/vendors/tailwind.min.css';
	$local_script_url = plugin_dir_url(__FILE__) . 'assets/vendors/tailwind.min.css';
	$cdn_script_url = 'https://cdn.tailwindcss.com';

	if (file_exists($local_script_path)) {
    wp_enqueue_style(
			'lws-boilerplate-tailwind', $local_script_url, array(), '3.4.1', true
		);
	} else {
		wp_enqueue_style(
			'lws-boilerplate-tailwind', $cdn_script_url, array(), '3.4.1', true
		);
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