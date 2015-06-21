<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 */
class UsersController extends AppController {
	public $scaffold;

    /**
     * Logs a user in.
     */
	public function login() {
        // Set layout
		$this->layout = 'front';

        if ($this->request->is('post')) {
            echo 'Email: ' . $this->request->data['User']['email'];
            echo 'Password: ' . $this->request->data['User']['password'];
            die();
        }
	}
}
