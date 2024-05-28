<?php
/****************************************************************
 * Add Sub Menu Page for Updates
 */

add_submenu_page(
  'lws_wpsettings_theme_dashboard',
  'Updates',
  'Updates',
  'manage_options',
  'lws_wpsettings_theme_updates',
  'lws_wpsettings_theme_updates_page'
);