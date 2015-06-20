<?php
App::uses('Incentive', 'Model');

/**
 * Incentive Test Case
 *
 */
class IncentiveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.incentive',
		'app.partner',
		'app.user',
		'app.incentives_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Incentive = ClassRegistry::init('Incentive');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Incentive);

		parent::tearDown();
	}

}
