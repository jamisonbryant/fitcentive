<?php
App::uses('Output', 'Model');

/**
 * Output Test Case
 *
 */
class OutputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.output',
		'app.activity',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Output = ClassRegistry::init('Output');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Output);

		parent::tearDown();
	}

}
