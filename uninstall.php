<?php
/**
 * WooCommerce Total Web Solutions Payment Gateway
 * Uninstall - removes all options from DB when user deletes the plugin via WordPress backend.
 * 
 * @since 1.0
 * 
 **/
 
if ( !defined('WP_UNINSTALL_PLUGIN') ) {
    exit();
}

delete_option( 'woocommerce_totalweb_settings' );		
