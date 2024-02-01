<?php
/**
 * @package Genesis
 */

 namespace inc;
 
 class Init {
    function __construct {
      
    }
 }

// use inc\Activate;
// use inc\Deactivate;
// use inc\Admin\AdminPages;

// class cGenesis {

//     public $pluginName;
//     // Public method can be accessed everywhere. Default method is public

//     // Protected method can be accessed within class or extension of class

//     // Private method can be access within class

//     // Static (public static <method>) - can use method without initializing class ex. cGenesis::register()
    
//     // construct is the first method called when an instance of a class is created
//     function __construct() {
//         $this->pluginName = plugin_basename(__FILE__);
//     } 

//     function register(){
//         // place css scripts in backend using admin. Use wp_enqueue_script to place css in frontend
//         add_action('admin_enqueue_scripts', array($this, 'enqueue')); 

//         // add program to WP left menu
//         add_action('admin_menu', array($this, 'add_admin_pages'));

//         // add additional links to list of plugin
//         add_filter('plugin_action_links_'.$this->pluginName, array ($this, 'settings_link'));
//     }

//     public function settings_link ($links) {
//         $settings_link = '<a href="admin.php?page=csc-genesis">Settings</a>';
//         array_push($links,$settings_link);
//         return $links;
//     }

//     public function add_admin_pages(){
//         add_menu_page('Genesis', 'Genesis Tool', 'manage_options', 'csc-genesis', array($this, 'admin_index'), 'dashicons-cover-image', 50);
//     }

//     public function admin_index(){
//         require_once plugin_dir_path(__FILE__).'templates/admin.php';
//     }

// /*     function activate (){
//         // generate a custom post type. find custom post type method in this class. Added in case init from add_action in __ construct method fails to trigger when plugin is activated
//         $this->custom_post_type(); 
        
//         // flush rewrite rule. Allow new post added for custom post type to work. Best use when adding and changing DB
//         flush_rewrite_rules();  
//     }

//     function deactivate (){
//         // flush rewrite rule
//         flush_rewrite_rules();
//     } */

// /*     function uninstall (){

//     } */

//     protected function custom_post_type () {
//         // Creates a new custom post type that displays on the left nav
//         register_post_type('book', ['public' => true, 'label' => 'Books']); 
//     }

//     function enqueue (){
//         // enqueue all scripts
//         wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
//         wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
//     }

//     function activate() {
//         // require_once plugin_dir_path(__FILE__).'include/genesis-plugin-activate.php';
//         Activate::activate();
//     }

//     function deactivate() {
//         // require_once plugin_dir_path(__FILE__).'include/genesis-plugin-deactivate.php';
//         Deactivate::deactivate();
//     }
// }

// if (class_exists('cGenesis')) {
//     $vGenesis = new cGenesis(); // create an instance of a class
//     $vGenesis->register(); // calling the register method
// }

// // 3 triggers of a plugin
// // Activation
// register_activation_hook(__FILE__, array ($vGenesis,'activate'));

// // Deactivation
// register_deactivation_hook(__FILE__, array ($vGenesis,'deactivate'));

// // uninstall
// // register_uninstall_hook(__FILE__, array ($vGenesis,'uninstall'));