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

class cGenesis {
    // methods
    // function __construct() {} // construct is the first method called when an instance of a class is created
    function __construct() {
        add_action('init', array ($this, 'custom_post_type'));
    }

    function register(){
        // place css scripts in backend using admin. Use wp_enqueue_script to place css in frontend
        add_action('admin_enqueue_scripts', array($this, 'enqueue')); 
    }

    function activate (){
        // generate a custom post type. find custom post type method in this class. Added in case init from add_action in __ construct method fails to trigger when plugin is activated
        $this->custom_post_type(); 
        
        // flush rewrite rule. Allow new post added for custom post type to work. Best use when adding and changing DB
        flush_rewrite_rules();  
    }

    function deactivate (){
        // flush rewrite rule
    }

    function uninstall (){

    }

    function custom_post_type () {
        // Creates a new custom post type that displays on the left nav
        register_post_type('book', ['public' => true, 'label' => 'Books']); 
    }

    function enqueue (){
        // enqueue all scripts
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
    }
}

if (class_exists('cGenesis')) {
    $vGenesis = new cGenesis(); // create an instance of a class
    $vGenesis->register();
}

// 3 triggers of a plugin
// Activation
// registration hook to this file using function activate from class instance vGenesis
register_activation_hook(__FILE__, array ($vGenesis,'activate'));

// Deactivation
register_deactivation_hook(__FILE__, array ($vGenesis,'deactivate'));

// uninstall
register_uninstall_hook(__FILE__, array ($vGenesis,'uninstall'));