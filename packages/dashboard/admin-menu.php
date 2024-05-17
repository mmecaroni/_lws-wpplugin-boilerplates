<?php
/****************************************************************
 * Add Sub Menu Page for Dashboard
 */

add_submenu_page(
  'lws_wpsettings_boilerplate_dashboard',
  'Dashboard',
  'Dashboard',
  'manage_options',
  'lws_wpsettings_boilerplate_dashboard',
  'lws_wpsettings_boilerplate_dashboard_page'
);