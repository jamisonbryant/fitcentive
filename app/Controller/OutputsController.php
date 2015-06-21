<?php

App::uses('AppController', 'Controller');

/**
 * Outputs Controller
 */
class OutputsController extends AppController {
    /**
     * Manage action
     */
    public function manage() {
        $this->set('outputs', $this->Output->find('all'));
    }

    /**
     * Adds a Output
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Output->create();

            if ($this->Output->save($this->request->data)) {
                $this->set('flash', 'Output added!');
                return $this->redirect('/outputs/manage');
            }

            $this->set('flash', 'Something went wrong :(');
        }
    }

    /**
     * Views a output
     *
     * @param int|null $id ID of output to retrieve
     */
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException('Invalid output');
        }

        $output = $this->Output->findById($id);

        if (!$output) {
            throw new NotFoundException('Invalid output');
        }

        $this->set('output', $output);
    }

    /**
     * Edits a output
     *
     * @param int|null $id ID of Output to update
     */
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException('Invalid output');
        }

        $output = $this->Output->findById($id);

        if (!$output) {
            throw new NotFoundException('Invalid output');
        }

        if ($this->request->is(array('output', 'put'))) {
            $this->Output->id = $id;

            if ($this->Output->save($this->request->data)) {
                $this->set('flash', 'Output updated!');
                return $this->redirect('/outputs/manage');
            }

            $this->set('flash', 'Something went wrong :(');
        }

        if (!$this->request->data) {
            $this->request->data = $output;
        }
    }

    /**
     * Deletes a output
     *
     * @param int $id ID of Output to delete
     */
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Output->delete($id)) {
            $this->set('flash', 'Output deleted!');
        } else {
            $this->set('flash', 'Something went wrong :(');
        }

        return $this->redirect('/outputs/manage');
    }
}
