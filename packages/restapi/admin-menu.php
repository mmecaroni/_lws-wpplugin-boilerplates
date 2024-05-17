<?php
/****************************************************************
 * Add Sub Menu Page for RestApi
 */

add_submenu_page(
  'lws_wpsettings_boilerplate_dashboard',
  'Rest Api',
  'Rest Api',
  'manage_options',
  'lws_wpsettings_boilerplate_restapi',
  'lws_wpsettings_boilerplate_restapi_page'
);