<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    /**
     * @var array Components used
     */
    public $components = array('Auth', 'Session');

    /**
     * Performs tasks after the action is completed, but before the view is rendered.
     */
    public function afterFilter()
    {
        // Handle toast if present
        if ($this->Session->check('toast')) {
            $this->Session->delete('toast');
        }
    }
}
