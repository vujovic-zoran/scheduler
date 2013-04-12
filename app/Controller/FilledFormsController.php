<?php
App::uses('AppController', 'Controller');
/**
 * FilledForms Controller
 *
 * @property FilledForm $FilledForm
 */
class FilledFormsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FilledForm->recursive = 0;
		$this->set('filledForms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FilledForm->exists($id)) {
			throw new NotFoundException(__('Invalid filled form'));
		}
		$options = array('conditions' => array('FilledForm.' . $this->FilledForm->primaryKey => $id));
		$this->set('filledForm', $this->FilledForm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FilledForm->create();
			if ($this->FilledForm->save($this->request->data)) {
				$this->Session->setFlash(__('The filled form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filled form could not be saved. Please, try again.'));
			}
		}
		$appointmentForms = $this->FilledForm->AppointmentForm->find('list');
		$appointments = $this->FilledForm->Appointment->find('list');
		$this->set(compact('appointmentForms', 'appointments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FilledForm->exists($id)) {
			throw new NotFoundException(__('Invalid filled form'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FilledForm->save($this->request->data)) {
				$this->Session->setFlash(__('The filled form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filled form could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FilledForm.' . $this->FilledForm->primaryKey => $id));
			$this->request->data = $this->FilledForm->find('first', $options);
		}
		$appointmentForms = $this->FilledForm->AppointmentForm->find('list');
		$appointments = $this->FilledForm->Appointment->find('list');
		$this->set(compact('appointmentForms', 'appointments'));
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
		$this->FilledForm->id = $id;
		if (!$this->FilledForm->exists()) {
			throw new NotFoundException(__('Invalid filled form'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FilledForm->delete()) {
			$this->Session->setFlash(__('Filled form deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Filled form was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
