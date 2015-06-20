<?php
App::uses('OutputsController', 'Controller');

/**
 * OutputsController Test Case
 *
 */
class OutputsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.output',
		'app.activity',
		'app.user',
		'app.input',
		'app.event',
		'app.events_user',
		'app.incentive',
		'app.partner',
		'app.incentives_user'
	);

}
