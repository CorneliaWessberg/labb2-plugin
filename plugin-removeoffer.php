<?php
/**
 * Plugin Name: Remove sale
 */

 add_action('wp_head', 'remove_my_hook');
 function remove_my_hook() {
     remove_action('woocommerce_single_product_summary', 'custom_text');
 }