<?php
App::uses('EventsController', 'Controller');

/**
 * EventsController Test Case
 *
 */
class EventsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event',
		'app.user',
		'app.input',
		'app.output',
		'app.activity',
		'app.events_user',
		'app.incentive',
		'app.partner',
		'app.incentives_user'
	);

}
