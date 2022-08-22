<?php
namespace WooEasyCart\Views;

class Cart {
    private static $instance;

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
	protected function setup() {
        var_dump("HelloPPPPPPPPPPPPPPPPP");
    }
}