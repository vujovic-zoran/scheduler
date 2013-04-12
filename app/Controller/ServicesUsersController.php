<?php
App::uses('AppController', 'Controller');
/**
 * ServicesUsers Controller
 *
 * @property ServicesUser $ServicesUser
 */
class ServicesUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ServicesUser->recursive = 0;
		$this->set('servicesUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServicesUser->exists($id)) {
			throw new NotFoundException(__('Invalid services user'));
		}
		$options = array('conditions' => array('ServicesUser.' . $this->ServicesUser->primaryKey => $id));
		$this->set('servicesUser', $this->ServicesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ServicesUser->create();
			if ($this->ServicesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The services user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The services user could not be saved. Please, try again.'));
			}
		}
		$services = $this->ServicesUser->Service->find('list');
		$users = $this->ServicesUser->User->find('list');
		$this->set(compact('services', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ServicesUser->exists($id)) {
			throw new NotFoundException(__('Invalid services user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ServicesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The services user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The services user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServicesUser.' . $this->ServicesUser->primaryKey => $id));
			$this->request->data = $this->ServicesUser->find('first', $options);
		}
		$services = $this->ServicesUser->Service->find('list');
		$users = $this->ServicesUser->User->find('list');
		$this->set(compact('services', 'users'));
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
		$this->ServicesUser->id = $id;
		if (!$this->ServicesUser->exists()) {
			throw new NotFoundException(__('Invalid services user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ServicesUser->delete()) {
			$this->Session->setFlash(__('Services user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Services user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
