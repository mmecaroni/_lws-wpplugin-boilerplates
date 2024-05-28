<?php

function lws_wpsettings_theme_menu_pages() {

    add_menu_page(
        /** Page title	*/ 'Dashboard',
        /** Menu title	*/ 'Theme Settings',
        /** Capability	*/ 'manage_options',
        /** Menu URL    */ 'lws_wpsettings_theme_dashboard',
        /** Callback    */ 'lws_wpsettings_theme_dashboard_page',
        /** Icon URL	*/ 'dashicons-tagcloud',
        /** Position	*/ 101
    );

    require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/dashboard/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/addons/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/updates/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_THEME_DIR) . 'packages/restapi/admin-menu.php';

}
add_action('admin_menu', 'lws_wpsettings_theme_menu_pages');