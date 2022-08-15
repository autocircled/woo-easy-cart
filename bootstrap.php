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
		
	}

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}
