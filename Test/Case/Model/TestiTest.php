<?php
App::uses('Testi', 'Model');

/**
 * Testi Test Case
 *
 */
class TestiTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Testi = ClassRegistry::init('Testi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Testi);

		parent::tearDown();
	}

}
