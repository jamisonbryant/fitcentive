<?php
App::uses('Input', 'Model');

/**
 * Input Test Case
 *
 */
class InputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.input',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Input = ClassRegistry::init('Input');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Input);

		parent::tearDown();
	}

}
