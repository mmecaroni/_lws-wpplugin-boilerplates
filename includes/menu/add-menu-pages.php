<?php

function lws_wpsettings_boilerplate_menu_pages() {

    add_menu_page(
        'Dashboard',
        'Boilerplate Settings',
        'manage_options',
        'lws_wpsettings_boilerplate_dashboard', // menu slug | construct the URL
        'lws_wpsettings_boilerplate_dashboard_page', // callback function renders content
        'dashicons-tagcloud',
        101
    );

    require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/admin-menu.php';
    require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/updates/admin-menu.php';

}
add_action('admin_menu', 'lws_wpsettings_boilerplate_menu_pages');