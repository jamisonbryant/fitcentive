<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 */
class UsersController extends AppController {

	public $scaffold;

	public function login() {
		$this->layout = 'front';
	}
}
