<?php
App::uses('AppController', 'Controller');
/**
 * Businesses Controller
 *
 * @property Business $Business
 */
class BusinessesController extends AppController {
 public function beforeFilter() {
		$this->Auth->allow('index', 'view');
}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Business->recursive = 0;
		$this->set('businesses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Business->exists($id)) {
			throw new NotFoundException(__('Invalid business'));
		}
		$options = array('conditions' => array('Business.' . $this->Business->primaryKey => $id));
		$this->set('business', $this->Business->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Business->create();
			if ($this->Business->save($this->request->data)) {
				$this->Session->setFlash(__('The business has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business could not be saved. Please, try again.'));
			}
		}
		$businessCategories = $this->Business->BusinessCategory->find('list');
		$this->set(compact('businessCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Business->exists($id)) {
			throw new NotFoundException(__('Invalid business'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Business->save($this->request->data)) {
				$this->Session->setFlash(__('The business has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Business.' . $this->Business->primaryKey => $id));
			$this->request->data = $this->Business->find('first', $options);
		}
		$businessCategories = $this->Business->BusinessCategory->find('list');
		$this->set(compact('businessCategories'));
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
		$this->Business->id = $id;
		if (!$this->Business->exists()) {
			throw new NotFoundException(__('Invalid business'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Business->delete()) {
			$this->Session->setFlash(__('Business deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Business was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
