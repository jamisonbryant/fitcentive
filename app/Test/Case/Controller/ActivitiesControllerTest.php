<?php
App::uses('ActivitiesController', 'Controller');

/**
 * ActivitiesController Test Case
 *
 */
class ActivitiesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activity',
		'app.output',
		'app.user',
		'app.input',
		'app.event',
		'app.events_user',
		'app.incentive',
		'app.partner',
		'app.incentives_user'
	);

}
