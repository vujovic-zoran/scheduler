<?php
App::uses('AppController', 'Controller');
/**
 * TimeBreaks Controller
 *
 * @property TimeBreak $TimeBreak
 */
class TimeBreaksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TimeBreak->recursive = 0;
		$this->set('timeBreaks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TimeBreak->exists($id)) {
			throw new NotFoundException(__('Invalid time break'));
		}
		$options = array('conditions' => array('TimeBreak.' . $this->TimeBreak->primaryKey => $id));
		$this->set('timeBreak', $this->TimeBreak->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimeBreak->create();
			if ($this->TimeBreak->save($this->request->data)) {
				$this->Session->setFlash(__('The time break has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time break could not be saved. Please, try again.'));
			}
		}
		$schedules = $this->TimeBreak->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TimeBreak->exists($id)) {
			throw new NotFoundException(__('Invalid time break'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TimeBreak->save($this->request->data)) {
				$this->Session->setFlash(__('The time break has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time break could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TimeBreak.' . $this->TimeBreak->primaryKey => $id));
			$this->request->data = $this->TimeBreak->find('first', $options);
		}
		$schedules = $this->TimeBreak->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TimeBreak->id = $id;
		if (!$this->TimeBreak->exists()) {
			throw new NotFoundException(__('Invalid time break'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TimeBreak->delete()) {
			$this->Session->setFlash(__('Time break deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Time break was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
