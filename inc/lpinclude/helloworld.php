<?php

/**
* plugin Name: hello Plugin
* plugin URI: 
* Description: This plugin
* Version: 1.0.0
* Author: StriveCoder
* Author URI: http://www.me.com
* licence: GPL2
*/

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
  add_menu_page(
    'Landing Page Settings', 
    'Landing Page', 
    'manage_options',
    'footer_setting_page', 
    'landing_page_settings',
    'dashicons-laptop',
    '1'
  );

  add_submenu_page( 
    'footer_setting_page', 
    'Header Settings', 
    'Header', 
    'manage_options', 
    'child-submenu-handle', 
    'header_page_settings');

  add_submenu_page( 
    'footer_setting_page', 
    'Footer Settings', 
    'Footer', 
    'manage_options', 
    'child-submenu-handlee', 
    'footer_settings_page');

  add_submenu_page( 
    'footer_setting_page', 
    'Slider Settings', 
    'Slider', 
    'manage_options', 
    'child-submenu-slider', 
    'slider_settings_page');
}


// mt_settings_page() displays the page content for the Test Settings submenu
function landing_page_settings() {
  include_once('landing_page_settings.php');
}
function header_page_settings() {
  include_once('header_settings.php');
}
function footer_settings_page() {
  include_once('footer_settings_page.php');
}
function slider_settings_page() {
  include_once('slider_settings_page.php');
}



