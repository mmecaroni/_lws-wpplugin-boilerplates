<?php
/******************************************
 * Tailwind CDN v3.4.1
 */

function lws_wpsettings_theme_add_tailwind_cdn() {
	$screen = get_current_screen();
	if ( strpos( $screen->id, 'lws_wpsettings_theme' ) !== false ) {
			echo '<script src="https://cdn.tailwindcss.com"></script>';
	}
}
add_action( 'admin_head', 'lws_wpsettings_theme_add_tailwind_cdn' );