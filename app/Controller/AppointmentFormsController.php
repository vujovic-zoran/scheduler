<?php
App::uses('AppController', 'Controller');
/**
 * AppointmentForms Controller
 *
 * @property AppointmentForm $AppointmentForm
 */
class AppointmentFormsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AppointmentForm->recursive = 0;
		$this->set('appointmentForms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AppointmentForm->exists($id)) {
			throw new NotFoundException(__('Invalid appointment form'));
		}
		$options = array('conditions' => array('AppointmentForm.' . $this->AppointmentForm->primaryKey => $id));
		$this->set('appointmentForm', $this->AppointmentForm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AppointmentForm->create();
			if ($this->AppointmentForm->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment form could not be saved. Please, try again.'));
			}
		}
		$services = $this->AppointmentForm->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AppointmentForm->exists($id)) {
			throw new NotFoundException(__('Invalid appointment form'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AppointmentForm->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment form could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AppointmentForm.' . $this->AppointmentForm->primaryKey => $id));
			$this->request->data = $this->AppointmentForm->find('first', $options);
		}
		$services = $this->AppointmentForm->Service->find('list');
		$this->set(compact('services'));
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
		$this->AppointmentForm->id = $id;
		if (!$this->AppointmentForm->exists()) {
			throw new NotFoundException(__('Invalid appointment form'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AppointmentForm->delete()) {
			$this->Session->setFlash(__('Appointment form deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Appointment form was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
