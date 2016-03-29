<?php
/**
 * Plugin Name: WooCommerce Checkout Fields
 * Version: 0.1-alpha
 * Description: PLUGIN DESCRIPTION HERE
 * Author: YOUR NAME HERE
 * Author URI: YOUR SITE HERE
 * Plugin URI: PLUGIN SITE HERE
 * Text Domain: wordpress-plugin-woocommerce-checkout-fields
 * Domain Path: /languages
 * @package WooCommerce Checkout Fields
 */

add_filter( 'woocommerce_form_field_args' , function ($args, $key, $value) use ($form_fields) {
  switch ($args['id']) {
    case 'billing_email':
    case 'billing_phone':
      $args['class'] = array_diff($args['class'], ['form-row-first','form-row-last']) + ['form-row-wide'];
      break;
  }
  return $args;
});
