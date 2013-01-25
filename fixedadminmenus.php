<?php
/*
Plugin Name: Admin Menus Fixed
Plugin URI: http://blog.imperialearth.com/wordpress/fixed-admin-menus-the-plugin-condensed/
Description: All admin menus available in a stacked, compressed, fixed configuration. Saves even more screen real estate and a lot of scrolling!
Version: 1.2
Author: Spherical (B.E (BJ) Johnson)
Author URI: http://sphericalmagic.com/
Donate link: http://sphericalmagic.com/plugins/
License: GPLv2
Requires at least: 3.1
Requires: WordPress 3.5+

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
	if ( version_compare($wp_version, '3.2.1', '>') ) {
		function fixedadmin_enqueue_scripts() {
				if ( is_admin_bar_showing() ) {
						wp_deregister_script( 'admin-bar' );
						wp_register_script( 'fixedadmin-bar-delay', plugins_url('admin-menus-fixed') . '/js/fixedadmin-bar-delay.js', array( 'jquery', 'hoverIntent' ), '1.2', true );
						wp_enqueue_script( 'fixedadmin-bar-delay' );
				}
			}
		add_action( 'admin_enqueue_scripts', 'fixedadmin_enqueue_scripts' );
	}

  function fixedadmin_enqueue_css() {
		global $wp_version;
		$bj_ozh_minimode = (array)get_option('ozh_adminmenu');
		if ( version_compare($wp_version, '3.5-beta1', '>=') ) {
			if (function_exists('wp_ozh_adminmenu')) {
				if ($bj_ozh_minimode['minimode']|get_option('agca_header')==true) {
					wp_enqueue_style( 'fixedadminmenus-nb', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus-nb.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
				} else {
					wp_enqueue_style( 'fixedadminmenus', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
				}
			} else {
				if ( is_admin_bar_showing() ) {
					wp_enqueue_style( 'fixedadminmenus-no', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus-no.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
				} else {
					wp_enqueue_style( 'fixedadminmenus-nob', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus-nob.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
				}
			}
		} else {
			if ( version_compare($wp_version, '3.3-beta1', '>=') ) {
				if (function_exists('wp_ozh_adminmenu')) {
					if ($bj_ozh_minimode['minimode']|get_option('agca_header')==true) {
						wp_enqueue_style( 'fixedadminmenus33-nb', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus33-nb.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
					} else {
						wp_enqueue_style( 'fixedadminmenus33', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus33.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
					}
				} else {
					if ( is_admin_bar_showing() ) {
						wp_enqueue_style( 'fixedadminmenus33-no', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus33-no.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
					} else {
						wp_enqueue_style( 'fixedadminmenus33-nob', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus33-nob.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
					}
				}
			} else {
				if ( version_compare($wp_version, '3.2-beta1', '>=') ) {
					if (function_exists('wp_ozh_adminmenu')) {
						if ($bj_ozh_minimode['minimode']|get_option('agca_header')==true) {
							wp_enqueue_style( 'fixedadminmenus32-nb', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus32-nb.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						} else {
							wp_enqueue_style( 'fixedadminmenus32', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus32.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						}
					} else {
						if ( is_admin_bar_showing() ) {
							wp_enqueue_style( 'fixedadminmenus32-no', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus32-no.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						} else {
							wp_enqueue_style( 'fixedadminmenus32-nob', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus32-nob.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						}
					}
				} else {
					if (function_exists('wp_ozh_adminmenu')) {
						if ($bj_ozh_minimode['minimode']|get_option('agca_header')==true) {
							wp_enqueue_style( 'fixedadminmenus31-nb', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus31-nb.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						} else {
							wp_enqueue_style( 'fixedadminmenus31', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus31.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						}
					} else {
						if ( is_admin_bar_showing() ) {
							wp_enqueue_style( 'fixedadminmenus31-no', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus31-no.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						} else {
							wp_enqueue_style( 'fixedadminmenus31-nob', plugins_url('admin-menus-fixed') . '/css/fixedadminmenus31-nob.css', array( 'admin-bar', 'wp-admin' ), '1.2' );
						}
					}
				}
			}
		}
	}
	add_action( 'admin_enqueue_scripts', 'fixedadmin_enqueue_css' );
}
?>
