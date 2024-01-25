<?php
/**
 * @package Genesis
 */

 class GenesisPluginActivate {
    public static function activate() {
        flush_rewrite_rules();
    }
 }