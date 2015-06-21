<?php

App::uses('AppController', 'Controller');

/**
 * Intakes Controller
 */
class IntakesController extends AppController {
    /**
     * Manage action
     */
    public function manage() {
        $intakes = $this->Intake->find('all');

        if (count($intakes) > 0) {
            $this->set('preloader', true);
            $this->set('image', 'intake.jpg');
        }

        $this->set('intakes', $intakes);
    }

    /**
     * Adds a Intake
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Intake->create();

            if ($this->Intake->save($this->request->data)) {
                $this->set('flash', 'Intake added!');
                return $this->redirect('/intakes/manage');
            }

            $this->set('flash', 'Something went wrong :(');
        }
    }

    /**
     * Views a intake
     *
     * @param int|null $id ID of intake to retrieve
     */
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException('Invalid intake');
        }

        $intake = $this->Intake->findById($id);

        if (!$intake) {
            throw new NotFoundException('Invalid intake');
        }

        $this->set('intake', $intake);
    }

    /**
     * Edits a intake
     *
     * @param int|null $id ID of Intake to update
     */
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException('Invalid intake');
        }

        $intake = $this->Intake->findById($id);

        if (!$intake) {
            throw new NotFoundException('Invalid intake');
        }

        if ($this->request->is(array('intake', 'put'))) {
            $this->Intake->id = $id;

            if ($this->Intake->save($this->request->data)) {
                $this->set('flash', 'Intake updated!');
                return $this->redirect('/intakes/manage');
            }

            $this->set('flash', 'Something went wrong :(');
        }

        if (!$this->request->data) {
            $this->request->data = $intake;
        }
    }

    /**
     * Deletes a intake
     *
     * @param int $id ID of Intake to delete
     */
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Intake->delete($id)) {
            $this->set('flash', 'Intake deleted!');
        } else {
            $this->set('flash', 'Something went wrong :(');
        }

        return $this->redirect('/intakes/manage');
    }
}
