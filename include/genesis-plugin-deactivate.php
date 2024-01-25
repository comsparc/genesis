<?php
/**
 * @package Genesis
 */

 class GenesisPluginDeactivate {
    public static function deactivate() {
        echo 'hello world!';
        flush_rewrite_rules();
    }
 }