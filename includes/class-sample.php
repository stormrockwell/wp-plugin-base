<?php
/**
 * Sample class
 *
 * @package WP_Plugin_Sample
 */

declare( strict_types = 1 );

namespace WPP;

/**
 * Sample class
 */
class Sample {
	/**
	 * Instance of self
	 *
	 * @var self
	 */
	protected static $instance;

	/**
	 * Constructor
	 */
	protected function __construct() {
		$this->add_hooks();
	}

	/**
	 * Get Instance.
	 *
	 * @param mixed ...$args Args assigned to instance in constructor.
	 */
	public static function get_instance( ...$args ) {
		if ( is_null( self::$instance ) ) {
			static::$instance = new static( ...$args );
		}

		return static::$instance;
	}

	/**
	 * Add WP Hooks
	 *
	 * @return void
	 */
	public function add_hooks() {
		if ( ! defined( 'PHPUNIT_IS_TESTING' ) ) { // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedIf
			// Add WP Hooks. The goal of this is to prevent hooks from executing while testing.
		}
	}

	/**
	 * Return true
	 *
	 * @return bool
	 */
	public function return_true() {
		return true;
	}
}
