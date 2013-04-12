<?php
App::uses('AppController', 'Controller');
/**
 * BusinessCategories Controller
 *
 * @property BusinessCategory $BusinessCategory
 */
class BusinessCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BusinessCategory->recursive = 0;
		$this->set('businessCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BusinessCategory->exists($id)) {
			throw new NotFoundException(__('Invalid business category'));
		}
		$options = array('conditions' => array('BusinessCategory.' . $this->BusinessCategory->primaryKey => $id));
		$this->set('businessCategory', $this->BusinessCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BusinessCategory->create();
			if ($this->BusinessCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The business category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BusinessCategory->exists($id)) {
			throw new NotFoundException(__('Invalid business category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BusinessCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The business category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BusinessCategory.' . $this->BusinessCategory->primaryKey => $id));
			$this->request->data = $this->BusinessCategory->find('first', $options);
		}
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
		$this->BusinessCategory->id = $id;
		if (!$this->BusinessCategory->exists()) {
			throw new NotFoundException(__('Invalid business category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BusinessCategory->delete()) {
			$this->Session->setFlash(__('Business category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Business category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
