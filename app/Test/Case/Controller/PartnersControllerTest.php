<?php
App::uses('PartnersController', 'Controller');

/**
 * PartnersController Test Case
 *
 */
class PartnersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.partner',
		'app.incentive',
		'app.user',
		'app.input',
		'app.output',
		'app.activity',
		'app.event',
		'app.events_user',
		'app.incentives_user'
	);

}
