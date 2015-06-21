<?php

App::uses('AppController', 'Controller');

/**
 * Goals Controller
 */
class GoalsController extends AppController {
    /**
     * Manage action
     */
    public function manage() {
        $this->set('goals', $this->Goal->find('all'));
    }

    /**
     * Adds a Goal
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Goal->create();

            if ($this->Goal->save($this->request->data)) {
                $this->set('flash', 'Goal added!');
            }

            $this->set('flash', 'Something went wrong :(');
        }
    }

    /**
     * Views a goal
     *
     * @param int|null $id ID of goal to retrieve
     */
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException('Invalid goal');
        }

        $goal = $this->Goal->findById($id);

        if (!$goal) {
            throw new NotFoundException('Invalid goal');
        }

        $this->set('goal', $goal);
    }

    /**
     * Edits a goal
     *
     * @param int|null $id ID of Goal to update
     */
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException('Invalid goal');
        }

        $goal = $this->Goal->findById($id);

        if (!$goal) {
            throw new NotFoundException('Invalid goal');
        }

        if ($this->request->is(array('goal', 'put'))) {
            $this->Goal->id = $id;

            if ($this->Goal->save($this->request->data)) {
                $this->set('flash', 'Goal updated!');
                return $this->redirect('/goals/manage');
            }

            $this->set('flash', 'Something went wrong :(');
        }

        if (!$this->request->data) {
            $this->request->data = $goal;
        }
    }

    /**
     * Deletes a goal
     *
     * @param int $id ID of Goal to delete
     */
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Goal->delete($id)) {
            $this->set('flash', 'Goal deleted!');
        } else {
            $this->set('flash', 'Something went wrong :(');
        }

        return $this->redirect('/goals/manage');
    }
}
