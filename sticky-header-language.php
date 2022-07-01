<?php
/**
* Plugin Name: Sticky Header Language
* Description: Plugin will be insert a sticky header with language links.
* Version: 1.0
* Author: Manish Gautam
**/

//load plugin
add_action('plugins_loaded', 'init_sticky_header_language', 1);

if (!function_exists('init_sticky_header_language')) {
	function init_sticky_header_language() {
		define('SHL_DIR', plugin_dir_path(__FILE__));
		define('SHL_URL', plugin_dir_url(__FILE__));

		require_once PLUGIN_DIR_path(__FILE__) . 'includes/class-language-header.php';
		require_once plugin_dir_path(__FILE__) . 'includes/language-menu.php';
	}
}