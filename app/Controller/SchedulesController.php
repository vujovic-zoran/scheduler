<?php
App::uses('AppController', 'Controller');
/**
 * Schedules Controller
 *
 * @property Schedule $Schedule
 */
class SchedulesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Schedule->recursive = 0;
		$this->set('schedules', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		$options = array('conditions' => array('Schedule.' . $this->Schedule->primaryKey => $id));
		$this->set('schedule', $this->Schedule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Schedule->create();
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash(__('The schedule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
		}
		$businesses = $this->Schedule->Business->find('list');
		$users = $this->Schedule->User->find('list');
		$services = $this->Schedule->Service->find('list');
		$this->set(compact('businesses', 'users', 'services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash(__('The schedule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Schedule.' . $this->Schedule->primaryKey => $id));
			$this->request->data = $this->Schedule->find('first', $options);
		}
		$businesses = $this->Schedule->Business->find('list');
		$users = $this->Schedule->User->find('list');
		$services = $this->Schedule->Service->find('list');
		$this->set(compact('businesses', 'users', 'services'));
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
		$this->Schedule->id = $id;
		if (!$this->Schedule->exists()) {
			throw new NotFoundException(__('Invalid schedule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Schedule->delete()) {
			$this->Session->setFlash(__('Schedule deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Schedule was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
