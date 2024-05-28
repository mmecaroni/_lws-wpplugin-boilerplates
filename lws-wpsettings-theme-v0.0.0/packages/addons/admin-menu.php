<?php
/****************************************************************
 * Add Sub Menu Page for Dashboard
 */

add_submenu_page(
  'lws_wpsettings_theme_dashboard',
  'Addons',
  'Addons',
  'manage_options',
  'lws_wpsettings_theme_addons',
  'lws_wpsettings_theme_addons_page'
);