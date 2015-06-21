<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 */
class UsersController extends AppController {
	public $scaffold;

    /**
     * Performs tasks before action is executed.
     */
    public function beforeFilter() {
        parent::beforeFilter();

        // Allow access to certain pages w/o login
        $this->Auth->allow('login');
    }

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
                $this->redirect('/users/dashboard');
            } else {
                $this->Session->write('toast', 'Hmm...we don\'t recognize that login. Try again?');
            }
        }
	}

    /**
     * Logs a user out.
     */
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Loads the user's dashboard.
     */
    public function dashboard() {
        $user = $this->User->findById($this->Auth->user('id'));
        $this->set('user', $user);
    }

    /**
     * Loads the user's account.
     */
    public function account() {
        $user = $this->User->findById($this->Auth->user('id'));
        $this->set('user', $user);
    }

    /**
     * Calculates a user's stats.
     */
    public function stats() {
        $user = $this->User->findById($this->Auth->user('id'));

        // Sum up user's intakes
        $total = 0;

        if (!is_null(@$user['Intake'])) {
            foreach ($user['Intake'] as $intake) {
                $total += round($intake['value'] * $intake['amount']);
            }
        }

        $stats['intake'] = $total;

        // Sum up user's outputs
        $total = 0;

        if (!is_null(@$user['Output'])) {
            foreach ($user['Output'] as $output) {
                $total += round($output['value'] * $output['amount']);
            }
        }

        $stats['output'] = $total;

        // Return data
        if (!empty($this->request->params['requested'])) {
            return $stats;
        } else {
            $this->set('stats', $stats);
        }
    }
}
