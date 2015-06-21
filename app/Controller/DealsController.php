<?php

App::uses('AppController', 'Controller');

/**
 * Deals Controller
 */
class DealsController extends AppController {
    /**
     * Lists deals for user to browse
     */
    public function browse() {
        $deals = $this->Deal->find('all');

        if (count($deals) > 0) {
            $this->set('preloader', true);
        }

        $this->set('deals', $deals);
    }
}
