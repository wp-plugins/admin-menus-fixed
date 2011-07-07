<?php
/*
Plugin Name: Fixed Admin Menus
Plugin URI: http://blog.imperialearth.com/wordpress/fixed-admin-menus-the-plugin/
Description: All admin menus available in a stacked and compressed configuration. Saves even more screen real estate and a lot of scrolling!
Version: 1.0
Author: Spherical (B.E (BJ) Johnson)
Author URI: http://sphericalmagic.com/
Donate link: http://sphericalmagic.com/plugins/
License: GPLv2
Requires: WordPress 3.1+

    Copyright 2010 B.E.Johnson  (email: bj-wpplugins@spherical.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( is_admin() ){
	add_action('admin_init', 'fixed_admin_menus_init', -1000);	// Init plugin
	add_action('admin_head', 'fixed_admin_menus_head', 999); // Insert CSS  in <head>
	add_action('in_admin_footer', 'fixed_admin_menus_footer'); // Add unobstrusive credits in footer

  function fixed_admin_menus_pluginurl() {
  	return plugin_dir_url( dirname(__FILE__) );
  }

  function fixed_admin_menus_init() {
    function fixed_admin_menus_css() {
      $plugin = fixed_admin_menus_pluginurl().'admin-menus-fixed/css/';
      if (function_exists('wp_ozh_adminmenu')) {
        if ( is_admin_bar_showing() ) {
          echo "<link rel='stylesheet' href='{$plugin}fixedadminmenus.css' type='text/css' media='all' />\n";
        } else {
          echo "<link rel='stylesheet' href='{$plugin}fixedadminmenus-nb.css' type='text/css' media='all' />\n";
        }
      } else {
        if ( is_admin_bar_showing() ) {
          echo "<link rel='stylesheet' href='{$plugin}fixedadminmenus-no.css' type='text/css' media='all' />\n";
        } else {
          echo "<link rel='stylesheet' href='{$plugin}fixedadminmenus-nob.css' type='text/css' media='all' />\n";
        }
      }
    }
  }

  function fixed_admin_menus_head() {
  	fixed_admin_menus_css();
  }

  function fixed_admin_menus_footer() {
	echo <<<HTML
<p id="fixed-admin-footer">Ozh' and WP Admin Menus Grouped and Position-fixed by a <a href="http://blog.imperialearth.com/wordpress/fixed-admin-menus-the-plugin/">companion plugin</a> from <a href="http://blog.imperialearth.com/">Spherical</a></p>
HTML;
  }
}
?>