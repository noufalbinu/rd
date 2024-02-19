<?php

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
  add_menu_page(
    'Landing Page Settings', 
    'Landing Page', 
    'manage_options',
    'submenu_setting_page', 
    'landing_page_settings',
    'dashicons-laptop',
    '1'
  );

  add_submenu_page( 
    'submenu_setting_page', 
    'Slider Settings', 
    'Main Background', 
    'manage_options', 
    'child-submenu-slider', 
    'slider_settings_page');

  add_submenu_page( 
    'submenu_setting_page', 
    'Header Settings', 
    'Header', 
    'manage_options', 
    'child-submenu-handle', 
    'header_page_settings');
  add_submenu_page( 
    'submenu_setting_page', 
    'Footer Settings', 
    'Footer', 
    'manage_options', 
    'child-submenu-handlee', 
    'footer_settings_page');
  
  add_submenu_page( 
    'submenu_setting_page', 
    'Facility Settings', 
    'Facility', 
    'manage_options', 
    'child-submenu-facility', 
    'facility_settings_page');
  add_submenu_page( 
    'submenu_setting_page', 
    'newsboard Settings', 
    'Newsboard', 
    'manage_options', 
    'child-submenu-newsboard', 
    'newsboard_settings_page');
  add_submenu_page( 
    'submenu_setting_page', 
    'paralax Settings', 
    'paralax', 
    'manage_options', 
    'child-submenu-paralax', 
    'paralax_settings_page');
  add_submenu_page( 
    'submenu_setting_page', 
    'Count Settings', 
    'count', 
    'manage_options', 
    'child-submenu-count', 
    'count_settings_page');
  add_submenu_page( 
    'submenu_setting_page', 
    'Services Settings', 
    'services', 
    'manage_options', 
    'child-submenu-services', 
    'services_settings_page');
  add_submenu_page( 
    'submenu_setting_page', 
    'textsection Settings', 
    'Text Section', 
    'manage_options', 
    'child-submenu-textsection', 
    'textsection_settings_page');
  add_submenu_page(
    'edit.php?post_type=facilities', 
    'Event settings',
    'Settings', 
    'manage_options', 
    'settings', 
    'facilities_cpt');
  add_submenu_page(
    'edit.php?post_type=gallery', 
    'Event settings',
    'Settings', 
    'manage_options', 
    'settings', 
    'gallery_cpt');
}

// mt_settings_page() displays the page content for the Test Settings submenu
function landing_page_settings() {
  include_once('lpinclude/landing_page_settings.php');
}
function header_page_settings() {
  include_once('lpinclude/header_settings.php');
}
function footer_settings_page() {
  include_once('lpinclude/footer_settings_page.php');
}
function slider_settings_page() {
   include_once('lpinclude/slider_settings_page.php');
}
function facility_settings_page() {
  include_once('lpinclude/facility_settings_page.php');
}
function paralax_settings_page() {
  include_once('lpinclude/paralax_settings_page.php');
}

function count_settings_page() {
  include_once('lpinclude/count_settings_page.php');
}
function services_settings_page() {
  include_once('lpinclude/services_settings_page.php');
}

function textsection_settings_page() {
  include_once('lpinclude/textsection_settings_page.php');
}
function newsboard_settings_page() {
  include_once('lpinclude/newsboard_settings_page.php');
}
function facilities_cpt() {
  include_once('lpinclude/custompage-facilities.php');
}
function gallery_cpt() {
  include_once('lpinclude/cpt-gallery.php');
}