<?php
/******************************************
 * AlpineJS v3.13.5
 */

function lws_wpsettings_boilerplate_enqueue_script_alpinejs() {

	$local_script_path = plugin_dir_path(__FILE__) . 'assets/vendors/alpine@3.13.5.min.js';
	$local_script_url = plugin_dir_url(__FILE__) . 'assets/vendors/alpine@3.13.5.min.js';
	$cdn_script_url = 'https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/cdn.min.js';

	if (file_exists($local_script_path)) {
			wp_enqueue_script(
				'lws-boilerplate-alpinejs', $local_script_url, array(), '3.13.7', true
			);
	} else {
			wp_enqueue_script(
				'lws-boilerplate-alpinejs', $cdn_script_url, array(), '3.13.7', true
			);
	}

	// wp_enqueue_script(
	// 	'alpinejs', 
	// 	plugin_dir_url(__FILE__) . 'assets/vendors/alpine@3.13.7.min.js', 
	// 	array(), '3.13.7', true
	// );

}