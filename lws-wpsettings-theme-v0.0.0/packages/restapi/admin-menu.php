<?php
/****************************************************************
 * Add Sub Menu Page for RestApi
 */

add_submenu_page(
  'lws_wpsettings_theme_dashboard',
  'Rest Api',
  'Rest Api',
  'manage_options',
  'lws_wpsettings_theme_restapi',
  'lws_wpsettings_theme_restapi_page'
);