<?php
/**
 * @package Genesis
 */

 class GenesisPluginDeactivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
 }