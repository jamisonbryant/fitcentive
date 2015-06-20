<?php
App::uses('IncentivesController', 'Controller');

/**
 * IncentivesController Test Case
 *
 */
class IncentivesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.incentive',
		'app.partner',
		'app.user',
		'app.input',
		'app.output',
		'app.activity',
		'app.event',
		'app.events_user',
		'app.incentives_user'
	);

}
