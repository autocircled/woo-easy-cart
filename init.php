<?php
/**
 * Plugin Name: Easy Cart for WooCommerce
 * Plugin URI: https://devhelp.us
 * Description: This is an Accordion FAQ Builder plugin which helps you to create awesome, eye-catchy unlimited FAQ accordion.
 * Version: 0.1
 * Requires at least: 4.0
 * Requires PHP:      5.6
 * Author: autocircle
 *
 * Text Domain: woo-easy-cart
 * Domain Path: /languages/
 *
 * @package woo-easy-cart
 */

use \WooEasyCart\Autoloader;
use \WooEasyCart\Bootstrap;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'WOOEASYCART_FILE' ) ) {
	define( 'WOOEASYCART_FILE', __FILE__ );
}

if ( ! defined( 'WOOEASYCART_BASENAME' ) ) {
	define( 'WOOEASYCART_BASENAME', plugin_basename( WOOEASYCART_FILE ) );
}

if ( ! defined( 'WOOEASYCART_DIR' ) ) {
	define( 'WOOEASYCART_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'WOOEASYCART_URL' ) ) {
	define( 'WOOEASYCART_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WOOEASYCART_NAMESPACE' ) ) {
	define( 'WOOEASYCART_NAMESPACE', 'WooEasyCart' );
}

if ( ! defined( 'WOOEASYCART_VERSION' ) ) {
	define( 'WOOEASYCART_VERSION', '0.1' );
}

require_once __DIR__ . '/autoloader.php';
Autoloader::run();
Bootstrap::instance();