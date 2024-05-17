<?php
/****************************************************************
 * Add Sub Menu Page for Updates
 */

add_submenu_page(
  'lws_wpsettings_boilerplate_dashboard',
  'Updates',
  'Updates',
  'manage_options',
  'lws_wpsettings_boilerplate_updates',
  'lws_wpsettings_boilerplate_updates_page'
);