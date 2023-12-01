<?php

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

    function activate (){
        
    }

    function deactivate (){

    }

    function uninstall (){

    }
}

if (class_exists('cGenesis')) {
    $vGenesis = new cGenesis(); // create an instance of a class
}

// 3 triggers of a plugin
// Activation
// registration hook to this file using function activate from class instance vGenesis
register_activation_hook(__FILE__, array ($vGenesis,'activate')) 

// Deactivation
register_deactivation_hook(__FILE__, array ($vGenesis,'deactivate')) 

// uninstall
