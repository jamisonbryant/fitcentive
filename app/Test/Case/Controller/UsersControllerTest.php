<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.input',
		'app.output',
		'app.activity',
		'app.event',
		'app.events_user',
		'app.incentive',
		'app.partner',
		'app.incentives_user'
	);

}
