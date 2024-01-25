<?php
/**
 * @package Genesis
 */

 class GenesisPluginActivate {
    public static function activate() {
        echo 'Hello World!'
        flush_rewrite_rules();
    }
 }