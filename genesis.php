<?php

/**
 * Plugin Name: Genesis
 * Plugin URI:  https://applab.comsparc.com/project/genesis
 * Author:      COMSPARC
 * Author URI:  https://comsparc.com
 * Description: This plugin is the <b>first</b> WordPress application developed by COMSPARC.
 * Version:     1.0.0
 * License:     GPL-3.0+
 * License URL: https://www.gnu.org/licenses/gpl-3.0.txt
 * text-domain: genesis
*/

defined('ABSPATH') or die("0"); // Kill program if entry doesn't have ABSPATH defined

class cGenesis {
    // methods
    function __construct($arg) { // construct is the first method called when an instance of a class is created
        echo $arg;
    }
}

if (class_exists('cGenesis')) {
    $vGenesis = new cGenesis('hello world'); // create an instance of a class
}

