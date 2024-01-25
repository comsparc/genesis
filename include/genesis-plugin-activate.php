<?php
/**
 * @package Genesis
 */

 class GenesisPluginActivate {
    public static function activate() {
        echo 'hello world';
        flush_rewrite_rules();
    }
 }