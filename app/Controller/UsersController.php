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

        // Handle login
        if ($this->request->is('post')) {
            // Look up user
            if ($user = $this->User->findByEmail($this->request->data['User']['email'])) {
                $this->Auth->login($user);
                $this->Session->write('toast', 'Welcome back to Fitcentive, ' . $user['User']['name'] . '!');
            } else {
                $this->Session->write('toast', 'Hmm...we don\'t recognize that login. Try again?');
            }
        }
	}
}
