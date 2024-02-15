<?php
/**
 * @package Genesis
 */

/**
 * Plugin Name: Genesis
 * Plugin URI:  https://applab.comsparc.com/project/genesis
 * Author:      COMSPARC
 * Author URI:  https://comsparc.com
 * Description: This plugin is the <b>first</b> WordPress application developed by COMSPARC.
 * Version:     1.0.1
 * License:     GPL-3.0+
 * License URL: https://www.gnu.org/licenses/gpl-3.0.txt
 * text-domain: genesis
*/

defined('ABSPATH') or die("0"); // Kill program if entry doesn't have ABSPATH defined

if ( file_exists(dirname( __FILE__ ).'/vendor/autoload.php')) {
    require_once dirname( __FILE__ ).'/vendor/autoload.php';
}

define('PLUGIN_PATH',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN',plugin__basename(__FILE__));

if (class_exists('inc\\Init')) {
    Inc\Init::register_services();
}