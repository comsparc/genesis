<?php

namespace inc\Pages;

class Admin{
    function __construct()
    {
        
    }

    public function register() { // used to trigger all the methods needed
         // add program to WP left menu
         add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages(){
         add_menu_page('Genesis', 'Genesis Tool', 'manage_options', 'csc-genesis', array($this, 'admin_index'), 'dashicons-cover-image', 50);
    }

    public function admin_index(){
         require_once plugin_dir_path(__FILE__).'templates/admin.php';
    }
}