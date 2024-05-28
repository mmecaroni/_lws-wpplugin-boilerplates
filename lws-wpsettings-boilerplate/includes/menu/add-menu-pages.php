<?php

function lws_wpsettings_boilerplate_menu_pages() {

    add_menu_page(
        /** Page title	*/ 'Dashboard',
        /** Menu title	*/ 'Boilerplate',
        /** Capability	*/ 'manage_options',
        /** Menu URL    */ 'lws_wpsettings_boilerplate_dashboard',
        /** Callback    */ 'lws_wpsettings_boilerplate_dashboard_page',
        /** Icon URL	*/ 'dashicons-tagcloud',
        /** Position	*/ 101
    );

    require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/addons/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/updates/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/restapi/admin-menu.php';

}
add_action('admin_menu', 'lws_wpsettings_boilerplate_menu_pages');