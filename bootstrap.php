<?php
/**
 * Bootstrap
 *
 * @since      0.1
 *
 * @package    woo-easy-cart
 */

namespace WooEasyCart;


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Bootstrap {

	/**
	 * Holds class object
	 *
	 * @var   object
	 * @since 0.1
	 */
	private static $instance;

	public function __construct() {
		// will be used for initialize all others
		// @see a-faq-builder
	}

	/**
	 * Allows for accessing single instance of class. Class should only be constructed once per call.
	 *
	 * @since 0.1
	 * @static
	 * @return self Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
			self::$instance->setup();
		}
		return self::$instance;
	}

	/**
	 * Setup necessary settings
	 *
	 * @since 0.1
	 */
	public function setup() {

		if ( !function_exists( 'is_plugin_active' ) ){
			/**
			* Including Plugin file for security
			* Include_once
			* 
			* @since 1.0.0
			*/
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		}

		if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			add_action( 'admin_notices', [ $this, 'easycw_admin_notice_missing_woocommerce' ] );
			return false;
		}
	}

	public function easycw_admin_notice_missing_woocommerce() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

           $message = sprintf(
                   esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'woo-easy-cart' ),
                   '<strong>' . esc_html__( 'Easy Cart for WooCommerce', 'woo-easy-cart' ) . '</strong>',
                   '<strong><a href="' . esc_url( 'https://wordpress.org/plugins/woocommerce/' ) . '" target="_blank">' . esc_html__( 'WooCommerce', 'woo-easy-cart' ) . '</a></strong>'
           );

           printf( '<div class="notice notice-error"><p>%1$s</p></div>', $message );
	}

}
