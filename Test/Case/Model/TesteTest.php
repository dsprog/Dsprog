<?php
App::uses('Teste', 'Model');

/**
 * Teste Test Case
 *
 */
class TesteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.teste'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Teste = ClassRegistry::init('Teste');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Teste);

		parent::tearDown();
	}

}
