<?php
/**
 * @package Genesis
 */

 namespace inc\Base;
 
 class SettingsLinks {
    // set settings link on the plugin page
    public function register() {
        add_action('admin_menu', array($this, 'add_admin_pages'));
        // add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link($links) {
        $settings_link = '<a href="admin.php?page=genesis">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
 }