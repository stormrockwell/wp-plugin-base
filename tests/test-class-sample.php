<?php
/**
 * Test Sample
 *
 * @package WP_Plugin_Sample
 */

use WPP\Sample;

/**
 * Indexer_Test class
 */
class Sample_Test extends WP_UnitTestCase {

	/**
	 * Set up
	 *
	 * @return void
	 */
	public function setUp() : void {
		parent::setUp();

		$this->sample = Sample::get_instance();
	}

	/**
	 * Tear down
	 *
	 * @return void
	 */
	public function tearDown() : void {
		parent::tearDown();

		unset( $this->sample );
	}

	/**
	 * Test return true
	 *
	 * @return void
	 */
	public function test_return_true() {
		$output = $this->sample->return_true();

		$this->assertTrue( $output );
	}
}
