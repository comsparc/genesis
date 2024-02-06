<?php

namespace inc\Base;

class Enqueue{
    // place css scripts in backend using admin. Use wp_enqueue_script to place css in frontend
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue')); 
    }

    function enqueue (){
        // enqueue all scripts
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
        wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
    }
}