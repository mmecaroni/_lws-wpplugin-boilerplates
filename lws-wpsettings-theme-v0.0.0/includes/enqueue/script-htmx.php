<?php
/******************************************
 * Htmx v1.9.10
 */

function lws_wpsettings_theme_enqueue_script_htmx() {

	$local_script_path = plugin_dir_path(__FILE__) . 'assets/vendors/htmx@1.9.10.js';
	$local_script_url = plugin_dir_url(__FILE__) . 'assets/vendors/htmx@1.9.10.js';
	$cdn_script_url = 'https://unpkg.com/htmx.org@1.9.10';

	if (file_exists($local_script_path)) {
			wp_enqueue_script(
				'lws-theme-htmx', $local_script_url, array(), '1.9.10', true
			);
	} else {
			wp_enqueue_script(
				'lws-theme-htmx', $cdn_script_url, array(), '1.9.10', true
			);
	}
  
  // wp_enqueue_script(
  //   'htmx', 
  //   plugin_dir_url(__FILE__) . 'assets/vendors/htmx@1.9.10.min.js', 
  //   array(), '1.9.10', true
  // );

}